const blc_active_oders = document.querySelector('.blc-products');
const list_links = document.querySelectorAll('.list-link');
for (const el of list_links) {
    el.addEventListener('click', check_active);
}

function check_active() {
    for (const el of list_links) {
        if(el.classList.contains('active')){
            el.classList.remove('active');
        }
    }
    this.classList.add('active');
    get_active_oders(this.id);
}

get_active_oders(1);

async function get_active_oders(param_oder){
    blc_active_oders.innerHTML = '';
    await fetch(`../../server/oder/oder.php?active=${param_oder}`)
        .then(data => data.json())
        .then(data => {
            if(data.length == 0) {
                blc_active_oders.innerHTML = `<p>У вас нет активных заказов</p>`;
            }
            for (const el of data) {
                create_card_active_oder(el);
            }
            console.log(data);
        })
}

function create_card_active_oder(oder) {
    blc_active_oders.innerHTML += `
    <div class="blc-active-oder">
        <div class="blc-num-oder">
            <p>Заказ №<br><span>${oder[0]}</span></p>
        </div>
        <div class="blc-name-oder">
            <a href="/catalog/product.php?id=${oder[2]}" class="link-name-oder">${oder[3]}</a>
        </div>
        <div class="blc-count-oder">
            <p><span>${oder[4]}</span> шт.</p>
        </div>
        <div class="blc-price-oder">
            <p><span>${oder[5]}</span> руб.</p>
        </div>
        <div class="blc-adres-oder">
            <p>${oder[6]}</p>
        </div>
    </div>
    `;
}