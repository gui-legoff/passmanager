<?php

/**
 * 
 * Main function can use everywhere 
 * 
 */

 // Convert the answer of a SELECT MySql to a array
 function ConvertResSqlToArray($oldArray){

    $newArray = array();
    foreach ($oldArray[0] as $key => $v) {
        if( !is_int($key) ){
            $newArray[$key] = $v;
        }
    }
    return $newArray;
}

// Convert the answer of a SELECT MySql to a array
function ConvertResSqlToMultiArray($oldArray,$nameArray = "id"){

    $newArray = array();
    foreach ($oldArray as $key => $v) {    
        $key = $v[$nameArray];
        foreach ($v as $key2 => $v2) {
            if( !is_int($key2) ){            
                $newArray[$key][$key2] = $v2;
            }
        }
    }
    return $newArray;
 }

// Check image upload
function CheckImageType($imageData){

    // Format d'image accepté
    $AcceptType = array('jpeg','jpg','png');
    $AcceptSize = 300000;

    // Type de fichier
    if(!in_array(explode('/',$imageData['type'])[1],$AcceptType)){
        return "L'image est au mauvais format";

    // Poids de l'image
    }elseif($imageData['size'] > $AcceptSize ){
        return "L'image est trop lourde";

    // OK    
    }else{
        return true;
    }
}


// Check if the req SQL is ok
function CheckSQLReq($req){
    if($req == false){
        return false;
    }else{
        return true;
    } 
}