let hash = new URL(window.location).search.substring(6);
const p_hash = document.querySelector('.hash');
p_hash.style.display = 'none';
const input_hash = document.querySelector('.hash input');
const form_login = document.querySelector('.form-login');

if(hash != '' || hash != null || hash != undefined){
    input_hash.value = `${hash}`;
}