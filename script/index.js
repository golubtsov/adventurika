function flag_localstorage() {
    localStorage.podcatalog = 'all';
    if (localStorage.basket == undefined) {
        localStorage.basket = JSON.stringify([]);
    }
}
flag_localstorage();

// СЛАЙДЕР

window.onresize = check_resize;

const line_slider_popular = document.querySelector('.blc-slider .popular');
const line_slider_new = document.querySelector('.blc-slider .new');

function check_resize() {
    if (window.outerWidth >= 1000 && window.outerWidth <= 1400) {
        line_slider_popular.style.gridTemplateColumns = '1fr 1fr 1fr';
        line_slider_new.style.gridTemplateColumns = '1fr 1fr 1fr';
        get_prod_by_if(3, 'popular');
        get_prod_by_if(3, 'new');
    }

    if (window.outerWidth < 1000) {
        line_slider_popular.style.gridTemplateColumns = '1fr 1fr';
        line_slider_new.style.gridTemplateColumns = '1fr 1fr';
        get_prod_by_if(4, 'popular');
        get_prod_by_if(4, 'new');
    }

    if (window.outerWidth < 600) {
        line_slider_popular.style.display = 'block';
        line_slider_new.style.display = 'block';
        get_prod_by_if(3, 'popular');
        get_prod_by_if(3, 'new');
    }
}
check_resize();

// ф-ия получает товары по условию (популярный или новый)
async function get_prod_by_if(count_prod, param) {
    line_slider_popular.innerHTML = '';
    line_slider_new.innerHTML = '';
    await fetch(`./server/index.php?count=${count_prod}&param=${param}`)
        .then(data => data.json())
        .then(data => {
            for (const el of data) {
                if(param == 'new'){
                    create_card_product(el, line_slider_new);
                } else {
                    create_card_product(el, line_slider_popular);
                }
            }
        })
}

function create_card_product(prod, block) {
    block.innerHTML += `
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

function create_reating(popular) {
    let ul_list_reating = `<ul class="raiting">`;
    for (let i = 0; i < popular; i++) {
        ul_list_reating += `
        <li class="item-star">
            <ion-icon name="star" class="star"></ion-icon>
        </li>
        `;
    }
    if (popular != 5) {
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