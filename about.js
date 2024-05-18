let menulist = document.getElementById("menu");
menulist.style.maxHeight = "0px";

function toggleMenu() {
    if (menulist.style.maxHeight == "0px") {
        menulist.style.maxHeight = "400px";
    }
    else {
        menulist.style.maxHeight = "0px";
    }
}