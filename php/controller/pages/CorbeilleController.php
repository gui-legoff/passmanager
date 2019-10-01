<?php

// Controller pour afficher la liste des vignettes surprimées
$aUserAccounts = $oUser -> accountsDataCorbeille($aUserData['id']);
$aUserAccounts = ConvertResSqlToMultiArray($aUserAccounts);

// Add image to the array
foreach ($aUserAccounts as $key => $value) {
    $img = lcfirst($aUserAccounts[$key]['name'].'.png');

    if(file_exists( './media/img/vignette/'.$img) ){
        $aUserAccounts[$key]['image'] = $img;
    }else{
        $aUserAccounts[$key]['image'] = 'vignette-default.png';
    }
}


// Controller pour gérer dynamiquement l'id du site
if(isset($_GET['delete'])){
    $idVignette = $_GET['delete'];
}elseif(isset($_GET['rescue'])){
    $idVignette = $_GET['rescue'];
}else{
    $idVignette = '';
}


// Controller pour supprimer définitivement un site
if( isset($_POST['deleteVignette']) ){
    if( !isset($_GET['delete']) ){
        header("Location: view/erreur.php");
        exit;  
    }elseif( (int)$_GET['delete'] === 0 ){                
        header("Location: view/erreur.php");
        exit;
    }else{
        $oAccount = new Account($db);
        $deleteWebsite = $oAccount -> deleteWebsite($aUserData['id'],$_GET['delete']);

        // Return message to view
        if($deleteWebsite){
            $_SESSION['message'] = '<script>$.notify("Le site a été supprimé définitivement", {type:"success",icon:"check-circle"});</script>';
        }else{$_SESSION['message'] = 'error';}

        header("Location: ./corbeille&#");
        exit;
    }    
}


// Controller pour supprimer définitivement tous les site
if(!empty($_POST['deleteAllVignette'])){
    $oAccount = new Account($db);
    $deleteAllWebsite = $oAccount -> deleteAllWebsite($aUserData['id']);

    // Return message to view
    if($deleteAllWebsite){
        $_SESSION['message'] = '<script>$.notify("Tous les sites ont été supprimés définitivement", {type:"success",icon:"check-circle"});</script>';
    }else{$_SESSION['message'] = 'error';}

    header("Location: ./corbeille&#");
    exit;
}


// Controller pour récupérer un site
if( isset($_POST['rescueVignette']) ){
    if( !isset($_GET['rescue']) ){
        header("Location: view/erreur.php");
        exit;  
    }elseif( (int)$_GET['rescue'] === 0 ){                
        header("Location: view/erreur.php");
        exit;
    }else{
        $oAccount = new Account($db);
        $rescueWebsite = $oAccount -> rescueWebsite($aUserData['id'],$_GET['rescue']);

        // Return message to view
        if($rescueWebsite){
            $_SESSION['message'] = '<script>$.notify("Tous les sites ont été supprimés définitivement", {type:"success",icon:"check-circle"});</script>';
        }else{$_SESSION['message'] = 'error';}

        header("Location: ./corbeille&#");
        exit;
    }    
}




///////////////////////////////////////////////////////////////////////////////////////

// Chargement de la view
include 'view/template_1/pages/structureCore.php';