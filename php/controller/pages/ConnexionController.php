<?php

// Connexion
$login = '';

if(isset($_POST['connexion'])){
    if( empty($_POST['login']) or empty($_POST['pass'])  ){
        $message = '<script>$.notify("Champs vides ou incomplet", {type:"danger",icon:"exclamation-triangle"});</script>';
    }elseif(!empty($_POST['login']) and !empty($_POST['pass'])){
        $login = htmlentities(addslashes($_POST['login']));
        $pass = htmlentities(addslashes($_POST['pass']));

        $oConnect = new Connexion($db);
        if( $oConnect -> connect($login,$pass) === false ){
            $message='<script>$.notify("Votre mot de passe ou identifiant semble incorrect !", {type:"danger",icon:"times"});</script>';
        }else{
            // Attribution de l'id du user a la variable de sessions
            $_SESSION['user']['id'] = $oConnect -> connect($login,$pass);
        
            // Redirection
            header("location:./");
            exit;    
        }
    }
}

// Inscription
if( isset($_GET['url']) and $_GET['url'] == 'inscription' ){

    // Variables
    if(isset($_POST['login'])){$email = $_POST['login'];}else{$email = '';}
    if(isset($_POST['pseudo'])){$pseudo = $_POST['pseudo'];}else{$pseudo = '';}
    if(isset($_POST['pass'])){$pass = $_POST['pass'];}else{$pass = '';}

    if(isset($_POST['inscription'])){
        if(empty($_POST['login']) or empty($_POST['pass']) or empty($_POST['pass2']) or empty($_POST['pseudo']) ){
            $message = '<script>$.notify("Champs vides ou incomplet", {type:"danger",icon:"exclamation-triangle"});</script>';
        }elseif($_POST['pass'] !== $_POST['pass2'] ){
            $message = '<script>$.notify("Les mots de passe ne sont pas identiques", {type:"danger",icon:"exclamation-triangle"});</script>';
        }elseif(!empty($_POST['login']) and !empty($_POST['pass']) and !empty($_POST['pass2']) and !empty($_POST['pseudo'])){
            $login = htmlentities(addslashes($_POST['login']));
            $pass = htmlentities(addslashes($_POST['pass']));
            $pseudo = htmlentities(addslashes($_POST['pseudo']));

            $oInscription = new Connexion($db);
            // Attribution de l'id du user a la variable de sessions
            $_SESSION['user']['id'] = $oInscription -> inscription($login,$pass,$pseudo);
        
            // Redirection
            header("location:./");
            exit;    
        }
    }
}

// View Inscription or connexion
if( !empty($_GET['url']) ){
    if($_GET['url'] == 'inscription'){
        require 'view/template_1/pages/inscription.php';
    }
}else{    
    require 'view/template_1/pages/connexion.php';
}



