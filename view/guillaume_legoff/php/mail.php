<?php

    // Désactive les rapports d'erreurs
    error_reporting(0);
    // var_dump($_POST);

    // Variable de réponse à la view
    $sResponseMail = '';
    $sErrorMail = '';
    
    if(!empty($_POST)){
        
        // Transfomation des nom des clés des input reçu en variable
        extract($_POST);

        // Verification des champs
        if( empty($nom) or empty($mail) or empty($objet) or empty($text) ){

            $sErrorMail='Tous les champs ne sont pas remplis correctement';
        
        // Verification du champs mail :
        }elseif( !preg_match("#^\w+@\w{2,}\.[a-z]{2,4}$#",$mail) ){

            $sErrorMail='L\'adresse e-mail n\'est pas valide.</p>';
        
        // Envoye du mail
        }else{

            $message = "Mail de : ".$mail."\n";
            $message .= "Nom : ".$nom."\n\n";
            $message .= "Message : ".$text."\n";	

            $envoiemail = mail("guillaumelegoffmail@gmail.com",$objet,$message);
            
            if($envoiemail){
                // $sResponseMail="
                //     Votre demande a bien été prise en compte.<br>
                //     Vous recevrez une réponse dans les plus brefs délais.<br>
                //     <img class='valid' src='images/checked.png' alt='checked' title='checked'>
                // ";
                $sResponseMail="
                    Votre demande a bien été prise en compte.<br>
                    Vous recevrez une réponse dans les plus brefs délais.<br>
                ";
            }else{
                $sErrorMail='Une erreur est survenue le mail ne c\'est pas correctement envoyé.';
            }
        }        
    }