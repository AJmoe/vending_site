document.addEventListener('DOMContentLoaded', function () {
    var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var revealEls = document.querySelectorAll('[data-reveal]');

    if (prefersReduced || !('IntersectionObserver' in window) || revealEls.length === 0) {
        revealEls.forEach(function (el) { el.classList.add('is-revealed'); });
    } else {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

        revealEls.forEach(function (el) {
            var group = el.closest('[data-reveal-stagger]');
            if (group) {
                var siblings = Array.prototype.slice.call(group.querySelectorAll('[data-reveal]'));
                var i = siblings.indexOf(el);
                el.style.transitionDelay = (i * 70) + 'ms';
            }
            observer.observe(el);
        });
    }

    var stats = document.querySelectorAll('.stat-value[data-count-to]');
    if (stats.length === 0) return;

    function animateCount(el) {
        var target = parseFloat(el.getAttribute('data-count-to'));
        var suffix = el.getAttribute('data-count-suffix') || '';
        if (prefersReduced || isNaN(target)) {
            el.textContent = target.toLocaleString() + suffix;
            return;
        }
        var start = performance.now();
        var duration = 1200;
        function tick(now) {
            var progress = Math.min((now - start) / duration, 1);
            var eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.floor(eased * target).toLocaleString() + suffix;
            if (progress < 1) requestAnimationFrame(tick);
        }
        requestAnimationFrame(tick);
    }

    if (!('IntersectionObserver' in window)) {
        stats.forEach(animateCount);
        return;
    }
    var statObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                animateCount(entry.target);
                statObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    stats.forEach(function (el) { statObserver.observe(el); });
});
