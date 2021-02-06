<?php

// File of main functions can use
require_once 'php/modules/function.php';

//____________________________________________________//

/**
   * Dynamic CSS linker
   *
   * @param string $pathCssFolder 
   * @param string $pathCssCustomFolder 
   * @return array $cssLinks
   *
   */

    $pathCssFolder = "view/template_1/assets/lib/css";
    $pathCssCustomFolder = "view/template_1/assets/css/pages/";

    $cssLinks = array();
    $scanCss = scandir($pathCssFolder);
    foreach ($scanCss as $c) {
        if($c != "." AND $c != ".."){
            $cssLinks[] = $c;
        }
    }

//____________________________________________________//

/**
   * Dynamic JS linker
   *
   * @param string $pathJsFolder 
   * @return array $jsLinks
   *
   */
  
    $pathJsFolder = "view/template_1/assets/lib/js";
  
    $jsLinks = array();
    $scanJs = scandir($pathJsFolder);
    foreach ($scanJs as $j) {
        if($j != "." AND $j != ".." AND $j != "jquery.js" AND $j != "notify.js"){
            $jsLinks[] = $j;
            }
    }


//____________________________________________________//
    
/**
   * Allowed pages controller
   *
   * @return array $allowedPages 
   *
   */

    $pathAllowedPages = "php/controller/pages";
    
    $AllowedPages = array();
    $scanP = scandir($pathAllowedPages);
    foreach ($scanP as $s) {
        if($s != "." AND $s != ".."){
            $s = explode('.',$s);
            $AllowedPages[] = $s[0];
        }
    }

//____________________________________________________//


/**
   * CSS / JS Link
   *
   * @return string $lien
   *
   */

    function lien($type){
        if($type == 'css'){
            if( isset($_GET['url']) && !empty($_GET['url']) ){
                $pathCss = 'view/template_1/assets/css/pages/'.$_GET['url'].'.css';
                if(file_exists($pathCss)){$lien = $pathCss;} 
            }else{
                $lien = 'view/template_1/assets/css/pages/accueil.css';
            }
        }elseif($type == 'js'){
            if( isset($_GET['url']) && !empty($_GET['url']) ){
                $pathJs = 'view/template_1/assets/js/pages/'.$_GET['url'].'.js';
                if(file_exists($pathJs)){$lien = $pathJs;} 
            }else{
                $lien = 'view/template_1/assets/js/pages/accueil.js';
            }
        }
        if(empty($lien)){$lien = '';}
        return $lien;        
    }

//____________________________________________________//


/**
 * Content controller pages
 *  
 */

if( !isset($_SESSION['user']) ){
    // Chargement du controller de la page de login
    require 'php/controller/pages/ConnexionController.php';

}elseif( !empty($_SESSION['user']['id']) ){

    // Create user object and collect data from database
    $oUser = new User($db);
    $userData = $oUser -> userData($_SESSION['user']['id']);         
    $aUserData = ConvertResSqlToArray($userData);

    // Image de profil
    require 'php/controller/ProfilController.php';

    // Controller de la vue
    if( empty($_GET['url']) ){
        require 'php/controller/pages/AccueilController.php';            
        
    }elseif( in_array(ucfirst($_GET['url'].'Controller'),$AllowedPages) ){
        $nameController = ucfirst($_GET['url'].'Controller');
        // Chargement du controller de la page souhaité
        require 'php/controller/pages/'.$nameController.'.php';                    
    }else{  
        // Page qui n'a pas de controller -> redirection vers une page d'erreur style 404
        require 'view/404.php';
    }    
}

//____________________________________________________//
    