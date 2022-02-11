require('./bootstrap');

import Alpine from 'alpinejs';



window.Alpine = Alpine;

Alpine.start();
document.addEventListener('DOMContentLoaded', (event) => {

var $buttonUser = document.getElementById('buttonUser');

$buttonUser.addEventListener('click', e => {
    var $formUser = document.getElementById('formUser');
    if($formUser.style.display=="none"){
        $formUser.style.display="flex";
    }
    else{
        $formUser.style.display="none";
    }
})
})
