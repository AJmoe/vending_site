document.addEventListener('DOMContentLoaded', function () {
    var wraps = document.querySelectorAll('.card-scroll-wrap');

    wraps.forEach(function (wrap) {
        var track = wrap.querySelector('[data-card-scroll]');
        var prevBtn = wrap.querySelector('[data-scroll-prev]');
        var nextBtn = wrap.querySelector('[data-scroll-next]');
        if (!track) return;

        function step() {
            var card = track.querySelector('.card');
            var gap = parseFloat(getComputedStyle(track).columnGap) || 24;
            return card ? card.getBoundingClientRect().width + gap : 300;
        }

        function updateButtons() {
            var maxScroll = track.scrollWidth - track.clientWidth;
            if (prevBtn) prevBtn.disabled = track.scrollLeft <= 4;
            if (nextBtn) nextBtn.disabled = track.scrollLeft >= maxScroll - 4;
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', function () {
                track.scrollBy({ left: -step(), behavior: 'smooth' });
            });
        }
        if (nextBtn) {
            nextBtn.addEventListener('click', function () {
                track.scrollBy({ left: step(), behavior: 'smooth' });
            });
        }

        var scrollTimeout;
        track.addEventListener('scroll', function () {
            window.clearTimeout(scrollTimeout);
            scrollTimeout = window.setTimeout(updateButtons, 80);
        }, { passive: true });

        updateButtons();
    });
});
