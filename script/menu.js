const menu_adapt = document.querySelector('.adapt');
const nav_items = document.querySelectorAll('.adapt .nav-item');
const btn_adapt = document.querySelector('.btn-adapt-menu');
btn_adapt.addEventListener('click', () => {
    if(check_active(btn_adapt)){
        remove_menu();
    } else {
        get_menu();
    }
});

function check_active(el){
    if(el.classList.contains('active')){
        return true;
    }
    return false;
}

function remove_menu(){
    btn_adapt.classList.remove('active');
    for (const el of nav_items) {
        el.style.opacity = 0;
    }
    setTimeout(() => {
        menu_adapt.style.height = 0;
    }, 200);
    menu_adapt.style.height = 0;
    setTimeout(() => {
        menu_adapt.style.display = 'none';
    }, 600);
}

function get_menu(){
    btn_adapt.classList.add('active');
    menu_adapt.style.display = 'flex';
    setTimeout(() => {
        menu_adapt.style.height = menu_adapt.scrollHeight + 'px';
    }, 200);
    setTimeout(() => {
        for (const el of nav_items) {
            el.style.opacity = 1;
        }
    }, 600);
}