document.addEventListener('DOMContentLoaded', function () {
    var toggle = document.querySelector('.nav-toggle');
    var nav = document.getElementById('primary-nav');

    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            var isOpen = nav.classList.toggle('is-open');
            toggle.classList.toggle('is-active', isOpen);
            toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });
    }

    var header = document.querySelector('.site-header');
    if (header) {
        var onScroll = function () {
            header.classList.toggle('is-scrolled', window.scrollY > 40);
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    document.querySelectorAll('.card-flip').forEach(function (card) {
        card.addEventListener('click', function () {
            card.classList.toggle('is-open');
        });
    });

    document.querySelectorAll('.value-row-expand').forEach(function (row) {
        row.addEventListener('click', function () {
            row.classList.toggle('is-open');
        });
    });

    document.querySelectorAll('.partner-card-expand').forEach(function (card) {
        card.addEventListener('click', function () {
            card.classList.toggle('is-open');
        });
    });
});
