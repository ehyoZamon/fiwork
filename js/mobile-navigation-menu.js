function openMenu(menuId) {
  document.querySelectorAll('.menu').forEach(menu => {
    menu.classList.add('hidden');
  });
  document.getElementById(menuId).classList.remove('hidden');
}