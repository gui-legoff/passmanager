<?php

/** Message controller
 * 
 * $message
 * $_SESSION['message']
 * 
 */

if(!empty($message)){
    echo $message;
}elseif(!empty($_SESSION['message'])){
    if($_SESSION['message'] == 'error'){
        echo '<script>$.notify("Une erreur du système est survenue", {type:"danger",icon:"times"});</script>';
    }else{
        echo $_SESSION['message'];
    }
    unset($_SESSION['message']); 
}