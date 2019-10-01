<?php

if(isset($_POST['longueur'])){
    if(!empty($_POST['minuscules']) || !empty($_POST['majuscules']) || !empty($_POST['chiffres']) || !empty($_POST['caracteresspeciaux']) && !empty($_POST['longueur'])){

        function passwdgenerator ($nb,$valeurs,$nbvaleurs){
            //Pour la fonction, nb doit être un entier supérieur à 1. C'est le cas ici.
            
                $resultat = "";
                
                for($i=0;$i<$nb;$i++){
            
                    $val = $valeurs[rand(0,$nbvaleurs-1)];
                    $resultat = $resultat.$val;
                }
            
                return $resultat;
        }
        
        $minuscules=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
        $majuscules=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
        $chiffres=array(0,1,2,3,4,5,6,7,8,9);
        $caracteresspeciaux=array("&gt;","&lt;",",",";",".","/",":","&amp;","|",")","(","~","#","{","}","[","]","-","=","$","*","!","?");
        $longueur=$_POST['longueur'];
        
        $touslescaracteres=array();
        
        if(!empty($_POST['minuscules'])) { $touslescaracteres=$touslescaracteres + $minuscules;}
        if(!empty($_POST['majuscules'])) { $touslescaracteres=array_merge($touslescaracteres,$majuscules);}
        if(!empty($_POST['chiffres'])) { $touslescaracteres=array_merge($touslescaracteres,$chiffres);}
        if(!empty($_POST['caracteresspeciaux'])) { $touslescaracteres=array_merge($touslescaracteres,$caracteresspeciaux);}
        
        $nbcaracteres=count($touslescaracteres);
        
        $motdepasse = passwdgenerator($longueur,$touslescaracteres,$nbcaracteres);

    }else{
        $message='<script>$.notify("Vous n\'avez sélectionné aucun filtre", {type:"danger",icon:"exclamation-triangle"});</script>';
    }
}


// Chargement de la view
include 'view/template_1/pages/structureCore.php';