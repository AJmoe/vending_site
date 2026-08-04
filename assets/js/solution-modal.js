document.addEventListener('DOMContentLoaded', function () {
    var triggers = document.querySelectorAll('[data-modal-target]');
    if (triggers.length === 0) return;

    var openModal = null;
    var lastFocused = null;

    function open(modal, trigger) {
        if (openModal) close();
        openModal = modal;
        lastFocused = trigger;
        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
        var closeBtn = modal.querySelector('.solution-modal-close');
        if (closeBtn) closeBtn.focus();
    }

    function close() {
        if (!openModal) return;
        openModal.classList.remove('is-open');
        openModal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
        if (lastFocused) lastFocused.focus();
        openModal = null;
    }

    triggers.forEach(function (trigger) {
        var modal = document.getElementById(trigger.getAttribute('data-modal-target'));
        if (!modal) return;
        trigger.addEventListener('click', function () {
            open(modal, trigger);
        });
        modal.querySelectorAll('[data-modal-close]').forEach(function (el) {
            el.addEventListener('click', close);
        });
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && openModal) {
            close();
        }
    });
});
