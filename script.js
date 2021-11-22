let rescon = document.getElementById('ResponsiveContainer');
let resicon = document.getElementById('ResIcon');
let menu_icon_1 = document.getElementById('menuIcon-1');
let menu_icon_2 = document.getElementById('menuIcon-2');

resicon.addEventListener('click', toggleMenu);

function toggleMenu() {
    rescon.classList.toggle('open');
    resicon.classList.toggle('icon-burger');
    menu_icon_1.classList.toggle('menu-icon-1');
    menu_icon_2.classList.toggle('menu-icon-2');
}