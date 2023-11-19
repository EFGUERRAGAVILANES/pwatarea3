document.addEventListener('DOMContentLoaded', function () {
    const menuBtn = document.querySelector('.menu-btn');
    const submenu = document.querySelector('.submenu');

    menuBtn.addEventListener('click', function () {
        
        submenu.style.display = (submenu.style.display === 'block') ? 'none' : 'block';
    });
});
