<?php

//______________ SESSIONS PHP ______________//

    session_start();

//______________________  AUTOLOAD ___________________________//
    

    /** It use to do not need to require or include model file
     *  it require with this function automaticaly a objet 
     *  is created
     */
    function chargerClasse($classe){
        require 'php/model/'.$classe.'.php';
    }
    spl_autoload_register('chargerClasse');

//_______________________ DEBUG MODE ________________________//

    // Set true to have debug mode else set false
    $debug= false;
    // $debug= true;

//_____________________ DATA BASE - MySQL ___________________//

    // Set Data base access
    $DBhost = ""; // name of the host
    $DBlogin = ""; // login 
    $DBmdp = ""; // password
    
    $DBdbname = ""; // name of database
