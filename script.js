// JavaScript to handle mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    const navLinks = document.querySelector('.nav__links');

    mobileMenu.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
});