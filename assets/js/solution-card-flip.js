document.addEventListener('DOMContentLoaded', function () {
    var cards = document.querySelectorAll('.card-solution-media');
    if (cards.length === 0) return;

    // Tap anywhere on the card (outside an explicit button) reveals the
    // front's hover panel on touch devices, matching the site's other
    // hover/.is-open toggle patterns.
    cards.forEach(function (card) {
        card.addEventListener('click', function (event) {
            if (event.target.closest('[data-flip-trigger]')) return;
            card.classList.toggle('is-open');
        });
    });

    // The "Explore more" button flips to the back; the back's own button
    // flips it back to the front. Both live inside a .card-solution-media.
    document.querySelectorAll('[data-flip-trigger]').forEach(function (btn) {
        btn.addEventListener('click', function (event) {
            event.stopPropagation();
            var card = btn.closest('.card-solution-media');
            if (card) card.classList.toggle('is-flipped');
        });
    });
});
