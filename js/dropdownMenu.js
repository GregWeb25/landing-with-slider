let isMenuDrop = false;
const dropdownSwitch = document.getElementById("mobilDropdownSwitch");
const dropdownMenu = document.getElementById("mobilDropdownMenu");

dropdownSwitch.addEventListener("click", () => {
    isMenuDrop = !isMenuDrop;
    if (isMenuDrop) {
        dropdownSwitch.innerHTML = `<img src="./public/svg/switch_close.svg" alt="dropdown switch">`;
        dropdownMenu.className = "mobil-dropdown_menu";
    } else {
        dropdownSwitch.innerHTML = `<img src="./public/svg/switch_open.svg" alt="dropdown switch">`;
        dropdownMenu.className = "mobil-dropdown_menu mobil-dropdown_menu__hidden";
    }

}) // логика работы мобильного выпадающего меню