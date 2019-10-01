<?php
    
/**
   * Barre de recherche
   *
   * @return array $accountSearchBar
   *
   */

$search = "";   

if(!empty($_POST['keyword'])){

    $id = $aUserData['id'];
    $keyword = htmlentities(addslashes($_POST['keyword']));
    $search = $keyword;
   
    // Response 
    $accountSearchBar = ConvertResSqlToMultiArray($oUser->accountSearchBar($id,$keyword));

    if(empty($accountSearchBar)){
        $message='<script>$.notify("Aucun résultat trouvé", {type:"info",icon:"exclamation-triangle"});</script>';
    }else{ 
        // Add image to the array
        foreach ($accountSearchBar as $key => $value) {
            $img = lcfirst($accountSearchBar[$key]['name'].'.png');
            
            if(file_exists( './media/img/vignette/'.$img) ){
                $accountSearchBar[$key]['image'] = $img;
            }else{
                $accountSearchBar[$key]['image'] = 'vignette-default.png';
            }
        }
    }
}