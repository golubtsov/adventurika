// ССЫЛКА КАТАЛОГ, ПРИСВАЕВАЕТ LOCALSTORAGE.PODCATALOG = ALL, ЧТОБЫ ПРИ КЛИКЕ ПО НЕЙ ЗАГРУЖАЛИСЬ ВСЕ КАТЕГОРИИ ТОВАРОВ

const link_catalog = document.querySelector('.link-catalog');
link_catalog.addEventListener('click', () => {
    localStorage.podcatalog = 'all';
});

// ОТКРЫТИЕ / ЗАКРЫТИЕ ПОДКАТАЛОГА
const blc_lists_podcatalog = document.querySelector('.blc-lists-podcatalog');

const lists_podcatalog = document.querySelectorAll('.list-podcatalog');

const btn_podcatalog = document.querySelector('#list-outline');
btn_podcatalog.addEventListener('click', () => {
    if (check_active(btn_podcatalog)) {
        remove_catalog();
    } else {
        get_catalog();
    }
});

function check_active(el) {
    if (el.classList.contains('active')) {
        return true;
    }
    return false;
}

function remove_catalog() {
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

function get_catalog() {
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

// ПОЛУЧЕНИЕ ТОВАРОВ ОПРЕДЕЛЕННОЙ ПОДКАТЕГОРИИ

const block_products = document.querySelector('.blc-window-products');

const links_podcatalog = document.querySelectorAll('.link-podcatalog');
for (const el of links_podcatalog) {
    el.addEventListener('click', get_products);
}

async function get_products(event) {
    event.preventDefault();
    block_products.innerHTML = '';
    let prod = this.getAttribute('data-podcatalog'); // название искомой подкатегории
    localStorage.podcatalog = prod;
    await fetch(`../server/index.php?product=${prod}`)
        .then(data => data.json())
        .then(data => {
            for (const el of data) {
                create_card_product(el);
            }
        })
}


function create_card_product(prod) {
    block_products.innerHTML += `
    <div class="blc-card-prod">
        <div class="blc-img-prod">
            <img src="${prod.img}" alt="${prod.name}">
        </div>
        <div class="blc-popular-prod">
            ${create_reating(prod.popular)}
        </div>
        <div class="blc-name-prod">
            <a class="link-title-prod">
                <span>${prod.name}</span>
            </a>
        </div>
        <div class="blc-price-prod">
            <span class="text-price">${prod.price} &#8381;</span>
        </div>
        <div class="blc-btn-add">
            <a id="${prod.id}" href="/catalog/product.php?id=${prod.id}" class="btn-add">Смотреть</a>
        </div>
    </div>
    `;
}

function create_reating(popular){
    let ul_list_reating = `<ul class="raiting">`;
    for (let i = 0; i < popular; i++) {
        ul_list_reating += `
        <li class="item-star">
            <ion-icon name="star" class="star"></ion-icon>
        </li>
        `;
    }
    if(popular != 5) {
        for (let i = 0; i < 5 - popular; i++) {
            ul_list_reating += `
            <li class="item-star">
                <ion-icon name="star-outline" class="star"></ion-icon>
            </li>
        `;
        }
    }
    ul_list_reating += '</ul>';
    return ul_list_reating;
}

let offset = 0; // переменная для определения с какой позиции начинать брать данные из бд
let limit = 12; // переменная - сколько брать элементов из бд

async function get_all_products() {
    await fetch(`../server/index.php?product=${localStorage.podcatalog}&limit=${limit}&offset=${offset}`)
        .then(data => data.json())
        .then(data => {
            console.log(data);
            for (let i = 0; i < data.length; i++) {
                create_card_product(data[i]);
            }
            blc_download.style.display = 'none';
        })
    offset = limit;
    limit += 12;
}
get_all_products();

const blc_download = document.querySelector('.blc-download');

const btn_get_more = document.querySelector('.btn-get-more');
btn_get_more.addEventListener('click', () => {
    blc_download.style.display = 'block';
    get_all_products();
});


