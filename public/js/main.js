var menu = document.getElementById("menu-header");
var btnMenu = document.getElementById("btn-menu");
var btnCloseMenu = document.getElementById("btn-close-menu");
var subMenuMobile = document.getElementById("submenu-mobile");
const menuOffset = menu.offsetTop;

window.addEventListener("scroll", () => {
    if (window.scrollY > menuOffset) {
        menu.classList.add("fixed");
    } else {
        menu.classList.remove("fixed");
    }
});

btnMenu.addEventListener("click", () => {
    subMenuMobile.classList.toggle("active");
});

btnCloseMenu.addEventListener("click", () => {
    subMenuMobile.classList.toggle("active");
});

function showText(id) {
    var element = document.getElementById("text-step-" + id);
    var button = document.getElementById("button-step-" + id);

    element.classList.toggle("text-expand");
    button.textContent = element.classList.contains("text-expand")
        ? "LEER MENOS"
        : "LEER MÁS";
}
