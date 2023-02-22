const blc_basket = document.querySelector('.blc-basket-content');

function get_basket() {
    let basket = JSON.parse(localStorage.basket);
    create_product(basket);
}

get_basket()

function create_product(products) {
    for (const el of products) {
        create_card_product(el);
    }
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
            <p class="value-price"><span>${prod.price}</span> руб.</p>
        </div>
        <div class="blc-count-product">
            <div class="count-product">
                <button class="btn-count minus">-</button>
                <span class="value-count"><span>${prod.count}</span> шт.</span>
                <button class="btn-count plus">+</button>
            </div>
        </div>
        <div class="blc-btn-remove">
            <button class="btn-remove-product">Удалить</button>
        </div>
    </div>
    `;

    const btns_remove_product = document.querySelectorAll('.btn-remove-product');
    const btns_minus = document.querySelectorAll('.minus');
    const btns_plus = document.querySelectorAll('.plus');
    for (let i = 0; i < btns_minus.length; i++) {
        btns_minus[i].addEventListener('click', () => {
            minus_product(prod.count);
        });
        btns_plus[i].addEventListener('click', () => {
            plus_product(prod.count);
        });
        btns_remove_product[i].addEventListener('click', remove_product);
    }
}

function remove_product(){
    console.log('re');
}

function plus_product(value){
    console.log
}

function minus_product(value){
    const count_value = document.querySelector('.value-count span');
    console.log(value);
}