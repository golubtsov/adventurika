function flag_localstorage(){
    localStorage.podcatalog = 'all';
    if(localStorage.basket == undefined){
        localStorage.basket = JSON.stringify([]);
    }
}
flag_localstorage();