const { forEach } = require("lodash");

document.addEventListener('DOMContentLoaded', (event) => {

    // Affichage du menu Utilisateur
    var $buttonUser = document.getElementById('buttonUser');
    var $formUser = document.getElementById('formUser');

    if ($buttonUser != null) {
        // Fonction d'évenement au click
        $buttonUser.addEventListener('click', () => {
            $formUser.classList.toggle('hidden');
        })
    }

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

    var $button_menu = document.getElementById('button_menu');
    $button_menu.addEventListener('click', () => {
        var $txt_button = document.getElementsByClassName('txt_button');

        for (let button of $txt_button) {
            button.classList.toggle('hidden');
        }
    })

    // Récupération des composants graphique pour la génération de mdp
    var $button_genere_mdp = document.getElementById('button_genere_mdp');
    var $champ_mdp = document.getElementById('champ_mdp');

    // Fonction d'évenement au client du bouton de gen
    $button_genere_mdp.addEventListener('click', async () => {
        // Call à l'API
        const responseHTTP = await fetch('https://api.motdepasse.xyz/create/?include_digits&include_lowercase&password_length=32&quantity=1');
        // Récupéraiton du JSON de la reponse de l'API
        const reponseJSON = await responseHTTP.json();
        console.log($champ_mdp);

        console.log(reponseJSON.passwords[0]);
        $champ_mdp.value = reponseJSON.passwords[0];
    })


})
