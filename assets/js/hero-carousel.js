document.addEventListener('DOMContentLoaded', function () {
    var carousel = document.querySelector('[data-carousel]');
    if (!carousel) return;

    var slides = Array.prototype.slice.call(carousel.querySelectorAll('[data-slide]'));
    var dots = Array.prototype.slice.call(carousel.querySelectorAll('.hero-dot'));
    var prevBtn = carousel.querySelector('[data-carousel-prev]');
    var nextBtn = carousel.querySelector('[data-carousel-next]');
    if (slides.length < 2) return;

    var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var current = 0;
    var intervalId = null;
    var intervalMs = 6000;

    function show(index) {
        slides[current].classList.remove('is-active');
        dots[current] && dots[current].classList.remove('is-active');
        dots[current] && dots[current].removeAttribute('aria-current');

        current = (index + slides.length) % slides.length;

        slides[current].classList.add('is-active');
        if (dots[current]) {
            dots[current].classList.add('is-active');
            dots[current].setAttribute('aria-current', 'true');
        }
    }

    function next() {
        show(current + 1);
    }

    function prev() {
        show(current - 1);
    }

    function start() {
        if (prefersReduced) return;
        stop();
        intervalId = window.setInterval(next, intervalMs);
    }

    function stop() {
        if (intervalId) {
            window.clearInterval(intervalId);
            intervalId = null;
        }
    }

    dots.forEach(function (dot, index) {
        dot.addEventListener('click', function () {
            show(index);
            start();
        });
    });

    if (prevBtn) {
        prevBtn.addEventListener('click', function () {
            prev();
            start();
        });
    }
    if (nextBtn) {
        nextBtn.addEventListener('click', function () {
            next();
            start();
        });
    }

    carousel.addEventListener('mouseenter', stop);
    carousel.addEventListener('mouseleave', start);
    carousel.addEventListener('focusin', stop);
    carousel.addEventListener('focusout', start);

    start();
});
