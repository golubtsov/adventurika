import Product from '../C_Product/Product.js';

function get_id_from_url() {
    let url = window.location.href;
    let param = new URL(url).search.substring(4);
    get_product_by_id(param);
}
get_id_from_url();

async function get_product_by_id(id) {
    await fetch(`../server/index.php?id=${id}`)
        .then(data => data.json())
        .then(data => {
            create_page_prod(data);
        })
}

function create_page_prod(prod) {
    const main_blc_product = document.querySelector('.main-blc-product');
    main_blc_product.innerHTML = `
    <div class="blc-images">
        <div class="blc-min-images">
            <img src="${prod[2]}" alt="${prod[1]}" class="mini-img">
            <img src="${prod[2]}" alt="${prod[1]}" class="mini-img">
            <img src="${prod[2]}" alt="${prod[1]}" class="mini-img">
        </div>
        <div class="blc-main-img">
            <img src="${prod[2]}" alt="${prod[1]}" class="main-img">
        </div>
    </div>
    <div class="blc-info-prod">
        <div class="blc-title-name-prod">
            <h1 class="title-name-prod">${prod[1]}</h1>
        </div>
        <div class="blc-code-prod">
            <span class="mini-blc-code-prod">Код товара: ${prod[0]}</span>
        </div>
        <div class="blc-price">
            <p class="price">${prod[3]} руб</p>
        </div>
        <div class="blc-add-basket">
            <button class="btn-add-basket">В корзину</button>
        </div>
        <div class="blc-description">
            <h2 class="title-description">Характеристики</h2>
            <ul class="list-desc">${create_list_description(prod[8])}</ul>
        </div>
    </div>
    `;

    const btn_add_basket = document.querySelector('.btn-add-basket');
    btn_add_basket.addEventListener('click', () => {
        add_basket(prod[0], prod[1], prod[3], prod[2]);
    });
}

function create_list_description(descript) {
    console.log(descript);
    let str_description = descript.split(',');
    let list_description = '';
    for (const el of str_description) {
        list_description += `
        <li>
            <p>${el}</p>
        </li>
        `;
    }
    return list_description;
}

// ДОБАВЛЕНИЕ ТОВАРА В КОРЗИНУ

function add_basket(id, name, price, img) {
    let product = new Product(id, name, price, img);
    let basket = get_basket();
    if(check_basket(product.id, basket) == false){
        basket = [...basket, product];
        send_basket(basket);
    } else {
        alert(check_basket(product.id, basket));
    }
}

function check_basket(id_prod, basket) {
    for (const el of basket) {
        if(el.id == id_prod){
            return 'Уже добавлен!';
        }
    }
    return false;
}

function get_basket(){
    let basket = JSON.parse(localStorage.basket);
    return basket;
}

function send_basket(basket){
    localStorage.basket = JSON.stringify(basket);
    alert('Товар добавлен в корзину!');
}

// ==========

// export default get_basket;