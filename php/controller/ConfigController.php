<?php

// Object model Config.php
if(is_string($DBhost) && is_string($DBdbname) && is_string($DBlogin) && is_string($DBmdp) ){

    $oConfig = new Config();
    
    // Set to model the value
    $oConfig->setHost($DBhost);
    $oConfig->setDbname($DBdbname);
    $oConfig->setLogin($DBlogin);
    $oConfig->setMdp($DBmdp);

    // Getteurs the value of the object
    $DBhost = $oConfig->getHost();
    $DBdbname = $oConfig->getDbname();
    $DBlogin = $oConfig->getLogin();
    $DBmdp = $oConfig->getMdp();

    $db = new PDO("mysql:host=$DBhost;dbname=$DBdbname","$DBlogin","$DBmdp"); 
    $db->exec("SET NAMES UTF8");
        
     
    // If connection if fail to database user will be redirect to an error page
    if(!$db){
        header("Location: view/erreur.php");
        exit;
    }
}






