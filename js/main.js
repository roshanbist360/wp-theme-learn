function openMenu() {
    document.getElementById("menu").style.height = "auto";
    document.getElementById("open_menubar").style.display = "none";
    document.getElementById("close_menubar").style.display = "flex";
}
function closeMenu() {
    document.getElementById("menu").style.height = "0";
    document.getElementById("open_menubar").style.display = "flex";
    document.getElementById("close_menubar").style.display = "none";
}