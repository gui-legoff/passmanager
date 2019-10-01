<?php

/**
   * Script to debug PHP errors
   *
   * @param bool $debug  //  Set true to have debug mode else set false
   * 
   */

$debug= true;

if ($debug){

    echo"<h2>POST :</h2>";
    var_dump($_POST);
    echo"<hr>";
    
    echo"<h2>GET :</h2>";
    var_dump($_GET);
    echo"<hr>";
    
    echo"<h2>SESSION :</h2>";
    var_dump($_SESSION);
    echo"<hr>";
    
    echo"<h2>FILES :</h2>";
    var_dump($_FILES);
    echo"<hr>";

}