//---------------
// HEADER
//---------------

// Hide menus, show them on hover
let headerMenus = document.querySelectorAll('.headerMenu');

function toggleShowMenu(target){
    target.querySelector('.headerMenuList').classList.toggle('hidden');
    console.log('classes', target.querySelector('.headerMenuList').classList)
}

for (let headerMenu of headerMenus) {
    headerMenu.addEventListener('mouseenter',e => toggleShowMenu(e.target));
    headerMenu.addEventListener('mouseleave',e => toggleShowMenu(e.target));
}