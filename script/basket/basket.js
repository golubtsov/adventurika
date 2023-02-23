const blc_basket = document.querySelector('.blc-products');
const altogether_price = document.querySelector('.altogether-price span');

function get_basket() {
    let basket = JSON.parse(localStorage.basket);
    if (basket.length != 0) {
        blc_basket.innerHTML = '';
        create_product(basket);
    }
    change_price(basket);
}

get_basket()

function create_product(products) {
    let n = 0;
    let sum = 0;
    for (const el of products) {
        create_card_product(el);
        n++;
        sum += el.price;
    }
    altogether_price.innerHTML = sum * n;
    test();
}

function create_card_product(prod) {
    blc_basket.innerHTML += `
    <div class="blc-product">
        <div class="blc-img-product">
            <img src="${prod.img}" alt="" class="img-product">
        </div>
        <div class="blc-name-product">
            <h3 class="title-product">${prod.name}</h3>
        </div>
        <div class="blc-price-product">
            <p class="value-price"><span data-price="${prod.id}">${prod.price}</span> руб.</p>
        </div>
        <div class="blc-count-product">
            <div class="count-product">
                <button data-minus="${prod.id}" class="btn-count minus">-</button>
                <span class="value-count"><span id="${prod.id}">${prod.count}</span> шт.</span>
                <button data-plus="${prod.id}" class="btn-count plus">+</button>
            </div>
        </div>
        <div class="blc-btn-remove">
            <button id="${prod.id}" class="btn-remove-product">Удалить</button>
        </div>
    </div>
    `;
}

function test() {
    const btns_remove_product = document.querySelectorAll('.btn-remove-product');
    const btns_minus = document.querySelectorAll('.minus');
    const btns_plus = document.querySelectorAll('.plus');
    for (let i = 0; i < btns_minus.length; i++) {
        btns_minus[i].addEventListener('click', minus_product);
        btns_plus[i].addEventListener('click', plus_product);
        btns_remove_product[i].addEventListener('click', remove_product);
    }
}

function remove_product() {
    let res_basket = [];
    for (const el of JSON.parse(localStorage.basket)) {
        if (el.id != this.id) {
            res_basket = [...res_basket, el];
        }
    }
    blc_basket.innerHTML = '<p>Здесь еще ничего нет.</p>';
    send_basket(res_basket);
    get_basket(res_basket);
}

function plus_product() {
    let res_basket = [];
    let id = this.getAttribute('data-plus');
    for (const el of JSON.parse(localStorage.basket)) {
        if(el.id == id) {
            if(el.count != 10) {
                el.count += 1;
            }
        }
        res_basket = [...res_basket, el];
    }
    send_basket(res_basket);
    get_basket(res_basket);
}

function minus_product() {
    let res_basket = [];
    let id = this.getAttribute('data-minus');
    for (const el of JSON.parse(localStorage.basket)) {
        if(el.id == id) {
            if(el.count != 1) {
                el.count -= 1;
            }
        }
        res_basket = [...res_basket, el];
    }
    send_basket(res_basket);
    get_basket(res_basket);
}

function change_price(arr) {
    const altogether_price = document.querySelector('.altogether-price>span');
    let price_result = 0;
    for (const el of arr) {
        price_result += el.count * el.price;
    }
    altogether_price.innerHTML = price_result;
}

function send_basket(elem) {
    localStorage.basket = JSON.stringify(elem);
}