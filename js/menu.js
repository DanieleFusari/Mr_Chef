function change_menu() {
  let menu_value = document.getElementById('dropdown_menus').value;
  window.location.replace("menus.php?menu=" + menu_value);
  if (menu_value === 'select') {
    window.location.replace("menus.php");
  }
}
