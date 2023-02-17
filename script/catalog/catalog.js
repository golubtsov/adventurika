const blc_lists_podcatalog = document.querySelector('.blc-lists-podcatalog');

const lists_podcatalog = document.querySelectorAll('.list-podcatalog');

const btn_podcatalog = document.querySelector('#list-outline');
btn_podcatalog.addEventListener('click', () => {
    console.log(btn_podcatalog);
    if(check_active(btn_podcatalog)){
        remove_catalog();
    } else {
        get_catalog();
    }
});

function check_active(el){
    if(el.classList.contains('active')){
        return true;
    }
    return false;
}

function remove_catalog(){
    btn_podcatalog.classList.remove('active');
    for (const el of lists_podcatalog) {
        el.style.opacity = 0;
    }
    setTimeout(() => {
        blc_lists_podcatalog.style.height = 0;
    }, 400);
    setTimeout(() => {
        for (const el of lists_podcatalog) {
            el.style.display = 'none';
        }
    }, 600);
}

function get_catalog(){
    btn_podcatalog.classList.add('active');
    for (const el of lists_podcatalog) {
        el.style.display = 'block';
    }
    setTimeout(() => {
        blc_lists_podcatalog.style.height = blc_lists_podcatalog.scrollHeight + 'px';
    }, 400);
    setTimeout(() => {
        for (const el of lists_podcatalog) {
            el.style.opacity = 1;
        }
    }, 600);
}