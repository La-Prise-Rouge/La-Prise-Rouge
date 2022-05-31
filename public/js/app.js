/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

document.addEventListener('DOMContentLoaded', function (event) {
  // Affichage du menu Utilisateur
  var $buttonUser = document.getElementById('buttonUser');
  var $formUser = document.getElementById('formUser');

  if ($buttonUser != null) {
    // Fonction d'évenement au click
    $buttonUser.addEventListener('click', function () {
      $formUser.classList.toggle('hidden');
    });
  } // Affichage du menu Navigation


  var $button_navigation = document.getElementById('boutton_nav');
  var $menu_navigation = document.getElementById('menu_nav');
  var $ouvrir_nav = document.getElementById('ouvre_nav');
  var $fermer_nav = document.getElementById('ferme_nav'); // Fonction d'évenement au click

  $button_navigation.addEventListener('click', function () {
    if ($menu_navigation.style.visibility == 'hidden' || $menu_navigation.style.visibility == '') {
      $menu_navigation.style.visibility = 'visible';
      $fermer_nav.style.display = 'flex';
      $ouvrir_nav.style.display = 'none';
    } else {
      $menu_navigation.style.visibility = '';
      $fermer_nav.style.display = 'none';
      $ouvrir_nav.style.display = 'flex';
    }
  });
});

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/postcss-loader/dist/cjs.js):\nSyntaxError: Unexpected token (26:16)\n    at _class.pp$4.raise (C:\\xampp2\\htdocs\\la-prise-rouge\\node_modules\\acorn\\dist\\acorn.js:2927:15)\n    at _class.pp.unexpected (C:\\xampp2\\htdocs\\la-prise-rouge\\node_modules\\acorn\\dist\\acorn.js:698:10)\n    at _class.pp.expect (C:\\xampp2\\htdocs\\la-prise-rouge\\node_modules\\acorn\\dist\\acorn.js:692:28)\n    at _class.pp$3.parseObj (C:\\xampp2\\htdocs\\la-prise-rouge\\node_modules\\acorn\\dist\\acorn.js:2563:14)\n    at _class.pp$3.parseExprAtom (C:\\xampp2\\htdocs\\la-prise-rouge\\node_modules\\acorn\\dist\\acorn.js:2302:19)\n    at _class.parseExprAtom (C:\\xampp2\\htdocs\\la-prise-rouge\\node_modules\\acorn-node\\lib\\dynamic-import\\index.js:77:117)\n    at _class.pp$3.parseExprSubscripts (C:\\xampp2\\htdocs\\la-prise-rouge\\node_modules\\acorn\\dist\\acorn.js:2129:21)\n    at _class.pp$3.parseMaybeUnary (C:\\xampp2\\htdocs\\la-prise-rouge\\node_modules\\acorn\\dist\\acorn.js:2106:19)\n    at _class.parseMaybeUnary (C:\\xampp2\\htdocs\\la-prise-rouge\\node_modules\\acorn-node\\lib\\private-class-elements\\index.js:122:54)\n    at _class.pp$3.parseExprOps (C:\\xampp2\\htdocs\\la-prise-rouge\\node_modules\\acorn\\dist\\acorn.js:2041:21)\n    at processResult (C:\\xampp2\\htdocs\\la-prise-rouge\\node_modules\\webpack\\lib\\NormalModule.js:758:19)\n    at C:\\xampp2\\htdocs\\la-prise-rouge\\node_modules\\webpack\\lib\\NormalModule.js:860:5\n    at C:\\xampp2\\htdocs\\la-prise-rouge\\node_modules\\loader-runner\\lib\\LoaderRunner.js:399:11\n    at C:\\xampp2\\htdocs\\la-prise-rouge\\node_modules\\loader-runner\\lib\\LoaderRunner.js:251:18\n    at context.callback (C:\\xampp2\\htdocs\\la-prise-rouge\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at Object.loader (C:\\xampp2\\htdocs\\la-prise-rouge\\node_modules\\postcss-loader\\dist\\index.js:142:7)");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_modules__["./resources/js/app.js"]();
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/css/app.css"]();
/******/ 	
/******/ })()
;