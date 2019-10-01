<?php

// Controller pour récupérer tous les sites du user
$aUserAccounts = $oUser -> accounts($aUserData['id']);
$aUserAccounts = ConvertResSqlToMultiArray($aUserAccounts);


if(!empty($aUserAccounts)){

    // Instanciation des variables
    $aAccounts = array(
        'identique' => [],
        'similaire' => [],
        'dif' => [],
        'vide' => []
    );

    // Nombre de mot de passe analysé
    $nbPass = count($aUserAccounts);

    // Création d'un tableau contenant les mots de passe du users
    $aPass = array();
    foreach ($aUserAccounts as $key => $value) {
        if(!empty($value['pass'])){
            array_push($aPass,$value['pass']);
        }
    }

    // Mot de passe de référence
    $referPass = array_keys(array_count_values($aPass),max(array_count_values($aPass)))[0];


    // Création d'un tableau pour lister les mots de passe identique supérieur a 2 
    $count_val = array_count_values($aPass);
    $aAccountsIdentique = [];
    foreach ($count_val as $key => $value) {
        if($value > 2 ){
            array_push($aAccountsIdentique,$key);
        }
    }

    // Controller pour remplir le tableau des sites qui n'on pas de mdp et le tableaux des sites qui on un mdp
    foreach ($aUserAccounts as $key => $value) {
        if(in_array($value['pass'],$aAccountsIdentique)){
            array_push($aAccounts['identique'],array('name' => $value['name'],'pass' => $value['pass']));
        }elseif($value['pass'] == ''){
            array_push($aAccounts['vide'],array('name' => $value['name'],'pass' => $value['pass']));  
        }else{
            array_push($aAccounts['dif'],array('name' => $value['name'],'pass' => $value['pass'])); 
        }
    }

    $aAccounts['different'] = [];
    foreach ($aAccounts['dif'] as $key => $value) {
        array_push($aAccounts['different'],array('name' => $value['name'],'pass' => $value['pass'])); 
    }
}

// Chargement de la view
include 'view/template_1/pages/structureCore.php';
