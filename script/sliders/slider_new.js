const line_slider_new = document.querySelector('.new .line-slider');

const list_card_prods_new = document.querySelectorAll('.new .blc-card-prod');

let length_list_card_prods_new = list_card_prods_new.length;
let max_offset_new = length_list_card_prods_new * 110;

line_slider_new.style.left = max_offset_new + 'px'

const btn_left_new = document.querySelector('.new .btn-left');
btn_left_new.addEventListener('click', () => {
    move_line_slider('left');
});


const btn_right_new = document.querySelector('.new .btn-right');
btn_right_new.addEventListener('click', () => {
    move_line_slider('right');
});

function move_line_slider(elem){
    if(elem == 'right') {
        if(max_offset_new == length_list_card_prods_new * 110){
            max_offset_new = 0;
        } else {
            max_offset_new += 220;
        }
    } else {
        if(max_offset_new == 0){
            max_offset_new = length_list_card_prods_new * 110;
        } else {
            max_offset_new -= 220;
        }
    }
    line_slider_new.style.left = max_offset_new + 'px';
}