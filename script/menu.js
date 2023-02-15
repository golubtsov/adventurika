const menu_adapt = document.querySelector('.adapt');
// ссылки адаптивного меню
const nav_items_adapt = document.querySelectorAll('.adapt .nav-item');
const btn_adapt = document.querySelector('.btn-adapt-menu');
btn_adapt.addEventListener('click', () => {
    if(check_active(btn_adapt)){
        remove_menu(btn_adapt, menu_adapt, nav_items_adapt);
    } else {
        get_menu(btn_adapt, menu_adapt, nav_items_adapt);
    }
});

// ссылки li>a на каталог
const nav_items_items = document.querySelectorAll('.nav-items-catalog .nav-item');
// список ul под ссылкой каталог
const nav_items_catalog = document.querySelector('.nav-items-catalog');
// ссылка li#id=nav-item-catalog  каталог
const nav_item_catalog = document.querySelector('#nav-item-catalog');
nav_item_catalog.addEventListener('mouseover', () => {
        get_menu(nav_item_catalog, nav_items_catalog, nav_items_items);
});

function check_active(el){
    if(el.classList.contains('active')){
        return true;
    }
    return false;
}

function remove_menu(btn, elem, links){
    btn.classList.remove('active');
    for (const el of links) {
        el.style.opacity = 0;
    }
    setTimeout(() => {
        elem.style.height = 0;
    }, 200);
    elem.style.height = 0;
    setTimeout(() => {
        elem.style.display = 'none';
    }, 600);
}

function get_menu(btn, elem, links){
    btn.classList.add('active');
    elem.style.display = 'block';
    setTimeout(() => {
        elem.style.height = elem.scrollHeight + 'px';
    }, 200);
    setTimeout(() => {
        for (const el of links) {
            el.style.opacity = 1;
        }
    }, 600);
}