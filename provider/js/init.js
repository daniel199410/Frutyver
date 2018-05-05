const sideNav = document.querySelector('.sidenav')
M.Sidenav.init(sideNav, {})

const collapsible = document.querySelectorAll('.collapsible');
M.Collapsible.init(collapsible, {});

document.querySelector("#productName").addEventListener("click", () => {
    const item = document.querySelector("#quantityFieldWrapper");
    item.classList.contains("add-field-collapsible") ? item.classList.remove("add-field-collapsible") : item.classList.add("add-field-collapsible");
})