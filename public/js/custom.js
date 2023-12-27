const navmenu = document.getElementById('navmenu');

function onToogleNav(e){
    e.name = e.name == 'menu-sharp' ? 'close-sharp' : 'menu-sharp';
    navmenu.classList.toggle('hidden');
}