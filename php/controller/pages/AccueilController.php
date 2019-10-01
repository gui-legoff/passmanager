<?php

// Permet de récupérer la liste des comptes du user
$aUserAccounts = $oUser -> accountsData($aUserData['id']);

/*** Si la réponse de la méthod est false c'est que la requète a échoué
 * 
 * Raisons 1 : la table n'existe pas 
 * 
 */

if( $oUser -> accountsData($aUserData['id']) === false ){
    header("Location: view/erreur.php");
    exit;
    
}else{
    // Convert the Mysql answer to an array
    $aUserAccounts = ConvertResSqlToMultiArray($aUserAccounts);

    // Add image to the array
    foreach ($aUserAccounts as $key => $value) {
        $img = lcfirst($aUserAccounts[$key]['name'].'.png');
        $img = str_replace(' ','_', $img);
        
        if(file_exists( './media/img/vignette/'.$img) ){
            $aUserAccounts[$key]['image'] = $img;
        }else{
            $aUserAccounts[$key]['image'] = 'vignette-default.png';
        }
    }
}

//Controller pour ajouter un site
if(!isset($_POST['addWebsite'])){
    $name = '';$login = '';$pass = '';$link = '';$notes = ''; 

}else{
    $name = htmlentities(addslashes($_POST['name']));
    $login = htmlentities(addslashes($_POST['login']));
    $pass = htmlentities(addslashes($_POST['pass']));

    if(isset($_POST['link'])){$link = htmlentities(addslashes($_POST['link']));}else{$link = '';}
    if(isset($_POST['notes'])){$notes = htmlentities(addslashes($_POST['notes']));}else{$notes = '';}

    if( empty($_POST['name']) || empty($_POST['login']) || empty($_POST['pass']) ){
        $message='<script>$.notify("Tous les champs ne sont remplis correctement", {type:"danger",icon:"times"});</script>';
    }else{
        $idUser = $aUserData['id'];
        $oAccount = new Account($db);
        $saveNewWebsite = $oAccount -> saveNewWebsite($idUser,$name,$login,$pass,$link,$notes);

        // Return message to view
        if($saveNewWebsite){
            $_SESSION['message'] = '<script>$.notify("Le site a été ajouté avec succès", {type:"success",icon:"check-circle"});</script>';
        }else{$_SESSION['message'] = 'error';}
        
        header("Location: ./#");
        exit;
    }
}
        
// Controller pour supprimer un site
if( isset($_POST['deleteVignette']) ){
    if( !isset($_GET['delete']) ){
        header("Location: view/erreur.php");
        exit;  
    }elseif( (int)$_GET['delete'] === 0 ){                
        header("Location: view/erreur.php");
        exit;
    }else{
        $idUser = $aUserData['id'];
        $oAccount = new Account($db);
        $sendToTrash = $oAccount -> sendToTrash($idUser,$_GET['delete']);

        // Return message to view
        if($sendToTrash){
            $_SESSION['message'] = '<script>$.notify("Le site a été supprimé avec succès", {type:"success",icon:"check-circle"});</script>';
        }else{$_SESSION['message'] = 'error';}
        
        header("Location: ./#");
        exit;
    }    
}

///////////////////////////////////////////////////////////////////////////////////////

// Controller pour gérer dynamiquement l'id dans les popup modifier / supprimer
if( isset($_GET['delete']) ){
    $idVignette = $_GET['delete'];
}elseif( isset($_GET['update']) ){
    $idVignette = $_GET['update'];

    // Variable pour remplier le formulaire
    $upName = $aUserAccounts["$idVignette"]['name'];
    $upLogin = $aUserAccounts["$idVignette"]['login'];
    $upPass = $aUserAccounts["$idVignette"]['pass'];
    $upLink = $aUserAccounts["$idVignette"]['link'];
    $upNotes = $aUserAccounts["$idVignette"]['notes'];

}else{
    $idVignette = '';
}


// Controller pour modifier une vignette
if(isset($_POST['updateWebsite'])){
    
    $idUser = $aUserData['id'];
    $id = htmlentities(addslashes($_POST['id']));
    $name = htmlentities(addslashes($_POST['name']));
    $login = htmlentities(addslashes($_POST['login']));
    $pass = htmlentities(addslashes($_POST['pass']));
    $link = htmlentities(addslashes($_POST['link']));
    if(isset($_POST['notes'])){
        $notes = htmlentities(addslashes($_POST['notes']));
    }else{
        $notes = "";
    }

    if( empty($name) && empty($login) && empty($pass) && empty($link) ){
        $message='<script>$.notify("Tous les champs ne sont remplis correctement", {type:"danger",icon:"times"});</script>';
    }else{
        $oAccount = new Account($db);
        $updateWebsite = $oAccount -> updateWebsite($idUser,$id,$name,$login,$pass,$link,$notes);

        // Return message to view
        if($updateWebsite){
            $_SESSION['message'] = '<script>$.notify("Le site a été correctement mis a jour", {type:"success",icon:"check-circle"});</script>';
        }else{$_SESSION['message'] = 'error';}
        
        header("Location: ./#");
        exit;
    }
}

//____________________________________________________//

// Controller de la barre de navigation
require 'php/controller/SearchBarController.php';

//____________________________________________________//


// Chargement de la view
include 'view/template_1/pages/structureCore.php';
