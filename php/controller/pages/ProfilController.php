<?php

// Upload image
if(!empty($_FILES['image'])){

    if($_FILES['image']['error'] !== 0){
        $message='<script>$.notify("Votre image n\'est pas compatible,<br>vérifier son format ou sa taille ...", {type:"danger",icon:"times"});</script>';    
    }else{
        // Check data from the FORM
        $checkImage = CheckImageType($_FILES['image']);

        if( $checkImage !== true){
            $message='<script>$.notify("'.$checkImage.'", {type:"danger",icon:"times"});</script>';    
        }else{
            $tmp_name = htmlentities($_FILES['image']['tmp_name']);
            $move = move_uploaded_file($tmp_name, $pathFolderImage.$idUser.'_profil.jpg');
            $_SESSION['message'] = '<script>$.notify("L\'image a été correctement mis a jour", {type:"success",icon:"check-circle"});</script>';

            if(empty($_POST['login']) && empty($_POST['password'])){
                header("Location: profil");
                exit;
            }        
        }
    }  
}

// Mettre a jour le mot de passe
if(!empty($_POST['login']) || !empty($_POST['password'])){
    
    if(!empty($_POST['login'])){$login = htmlentities(addslashes($_POST['login']));}
    // Mot de passe hasher en sha256
    if(!empty($_POST['password'])){
        $password = hash('sha256',htmlentities(addslashes($_POST['password'])));
    }
    
    if(!empty($login) && !empty($password)){
        $data = "`login` = '$login',`password` = '$password'";        
    }elseif(!empty($login)){
        $data = "`login` = '$login'";
    }elseif(!empty($password)){
        $data = "`password` = '$password'";        
    }
    
    // Appel a la méthod d'update
    $update = $oUser -> updateUserData($data,$idUser);      

    // Message retourner à l'utilisateur
    if($update === false){
        $message='<script>$.notify("Une erreur est survenue ...", {type:"danger",icon:"exclamation-triangle"});</script>';
    }else{
        $_SESSION['message'] = '<script>$.notify("Les informations on été correctement mis à jour", {type:"success",icon:"check-circle"});</script>';
        header("Location: profil");
        exit;
    }
}


// Chargement de la view
include 'view/template_1/pages/structureCore.php';
