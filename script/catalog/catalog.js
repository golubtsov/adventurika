// открытие / закрытие подкаталога
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

// открытие / закрытие подкаталога

// работа блока фильтр, когда он нагодится сверху 

const form_filtr = document.querySelector('.form-filtr');

const btn_filtr = document.querySelector('.title-filtr');
btn_filtr.addEventListener('click', () => {
    if (check_active(btn_filtr)) {
        remove_blc_filtr();
    } else {
        get_blc_filtr();
    }
});

function remove_blc_filtr() {
    btn_filtr.classList.remove('active');
    form_filtr.style.opacity = 0;
    setTimeout(() => {
        form_filtr.style.height = 0 + 'px';
    }, 400);
    setTimeout(() => {
        form_filtr.style.display = 'none';
    }, 700);
}

function get_blc_filtr() {
    btn_filtr.classList.add('active');
    form_filtr.style.display = 'block';
    setTimeout(() => {
        form_filtr.style.height = 220 + 'px';
    }, 400);
    setTimeout(() => {
        form_filtr.style.opacity = 1;
    }, 600);
}

// работа блока фильтр, когда он нагодится сверху 

// получение товаров определенной подкатегории

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
            console.log(data);
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
            <ul class="raiting">
                <li class="item-star"><ion-icon name="star" class="star"></ion-icon></li>
                <li class="item-star"><ion-icon name="star" class="star"></ion-icon></li>
                <li class="item-star"><ion-icon name="star" class="star"></ion-icon></li>
                <li class="item-star"><ion-icon name="star" class="star"></ion-icon></li>
                <li class="item-star"><ion-icon name="star" class="star"></ion-icon></li>
            </ul>
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

async function get_all_products() {
    await fetch(`../server/index.php?product=${localStorage.podcatalog}`)
        .then(data => data.json())
        .then(data => {
            console.log(data);
            for (let i = 0; i < 10; i++) {
                create_card_product(data[i]);
            }
        })
}
get_all_products();

// получение товаров определенной подкатегории

// ================

// function flag_localstorage(){
//     localStorage.podcatalog = 'all';
// }
// flag_localstorage();