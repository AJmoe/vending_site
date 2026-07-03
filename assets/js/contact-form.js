document.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector('form[action="/contact.php"]');
    if (!form) return;

    var rules = {
        name: function (v) { return v.trim() !== '' ? '' : 'Please enter your full name.'; },
        email: function (v) { return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v.trim()) ? '' : 'Please enter a valid email address.'; },
        phone: function (v) { return v.trim() !== '' ? '' : 'Please enter your phone number.'; },
        message: function (v) { return v.trim() !== '' ? '' : 'Please enter a message.'; }
    };

    Object.keys(rules).forEach(function (fieldName) {
        var field = form.elements[fieldName];
        if (!field) return;

        var errorEl = document.createElement('div');
        errorEl.className = 'field-error';
        field.insertAdjacentElement('afterend', errorEl);

        field.addEventListener('blur', function () {
            var msg = rules[fieldName](field.value);
            field.classList.toggle('is-invalid', !!msg);
            field.classList.toggle('is-valid', !msg && field.value.trim() !== '');
            errorEl.textContent = msg;
        });

        field.addEventListener('input', function () {
            if (field.classList.contains('is-invalid')) {
                var msg = rules[fieldName](field.value);
                field.classList.toggle('is-invalid', !!msg);
                field.classList.toggle('is-valid', !msg && field.value.trim() !== '');
                errorEl.textContent = msg;
            }
        });
    });
});
