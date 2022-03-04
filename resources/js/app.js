document.addEventListener('DOMContentLoaded', (event) => {

    // Affichage du menu Utilisateur
    var $buttonUser = document.getElementById('buttonUser');
    var $formUser = document.getElementById('formUser');

    // Fonction d'évenement au click
    $buttonUser.addEventListener('click', () => {
        $formUser.classList.toggle('hidden');
    })    

    // Affichage du menu Navigation
    var $button_navigation = document.getElementById('boutton_nav');
    var $menu_navigation = document.getElementById('menu_nav');
    var $ouvrir_nav = document.getElementById('ouvre_nav');
    var $fermer_nav = document.getElementById('ferme_nav');

    // Fonction d'évenement au click
    $button_navigation.addEventListener('click', () => {
        if($menu_navigation.style.visibility == 'hidden' || $menu_navigation.style.visibility == ''){
            $menu_navigation.style.visibility = 'visible';
            $fermer_nav.style.display = 'flex';
            $ouvrir_nav.style.display = 'none';
        }
        else{
            $menu_navigation.style.visibility = '';
            $fermer_nav.style.display = 'none';
            $ouvrir_nav.style.display = 'flex';
        }
    })
})
