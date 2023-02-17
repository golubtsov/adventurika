const blc_lists_podcatalog = document.querySelector('.blc-lists-podcatalog');

const lists_podcatalog = document.querySelectorAll('.list-podcatalog');

const btn_podcatalog = document.querySelector('#list-outline');
btn_podcatalog.addEventListener('click', () => {
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

// работа блока фильтр, когда он нагодится сверху 

const form_filtr = document.querySelector('.form-filtr');

const btn_filtr = document.querySelector('.title-filtr');
btn_filtr.addEventListener('click', () => {
    if(check_active(btn_filtr)){
        remove_blc_filtr();
    } else {
        get_blc_filtr();
    }
});

function remove_blc_filtr(){
    btn_filtr.classList.remove('active');
    form_filtr.style.opacity = 0;
    setTimeout(() => {
        form_filtr.style.height = 0 + 'px';
    }, 400);
    setTimeout(() => {
        form_filtr.style.display = 'none';
    }, 700);
}

function get_blc_filtr(){
    btn_filtr.classList.add('active');
    form_filtr.style.display = 'block';
    setTimeout(() => {
        form_filtr.style.height = 220 + 'px';
    }, 400);
    setTimeout(() => {
        form_filtr.style.opacity = 1;
    }, 600);
}

