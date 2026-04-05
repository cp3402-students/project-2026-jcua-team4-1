// Main JS file for KC Tennis Blast theme
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const toggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.main-navigation');

    if (toggle && nav) {
        toggle.addEventListener('click', function() {
            nav.classList.toggle('toggled');
            const expanded = toggle.getAttribute('aria-expanded') === 'true';
            toggle.setAttribute('aria-expanded', !expanded);
        });
    }
});