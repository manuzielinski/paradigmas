document.addEventListener("DOMContentLoaded", function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navContainer = document.querySelector('.nav-container');

    menuToggle.addEventListener('click', function() {
        navContainer.classList.toggle('active'); // Asegúrate de que .active esté definido en tu CSS
    });
});
