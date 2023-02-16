const line_slider = document.querySelector('.popular .line-slider');

const list_card_prods = document.querySelectorAll('.popular .blc-card-prod');

let length_list_card_prods = list_card_prods.length;
let max_offset = length_list_card_prods * 110;

line_slider.style.left = max_offset + 'px'

const btn_left = document.querySelector('.popular .btn-left');
btn_left.addEventListener('click', () => {
    move_line_slider('left');
});


const btn_right = document.querySelector('.popular .btn-right');
btn_right.addEventListener('click', () => {
    move_line_slider('right');
});

function move_line_slider(elem){
    if(elem == 'right') {
        if(max_offset == length_list_card_prods * 110){
            max_offset = 0;
        } else {
            max_offset += 220;
        }
    } else {
        if(max_offset == 0){
            max_offset = length_list_card_prods * 110;
        } else {
            max_offset -= 220;
        }
    }
    line_slider.style.left = max_offset + 'px';
}