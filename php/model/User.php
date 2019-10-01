<?php

/**
   * Class of connexion to account user
   *
   * @param string $db
   * @param string $id
   * 
   */

    class User extends Db {

        private $id;

        // fonction qui se déclenche automatiquement pour se connecter a la Db 
	    function __construct($db){
            parent::__construct($db);
        }   

        // Method qui permet de récuperer les infos du user
        public function userData($id){

            $req=$this->_db->query(" SELECT * FROM users WHERE id='$id' ");  
            $res=$req->fetchAll();
            return $res;
        }

        // Méthod qui permet de récupérer la liste des comptes du user
        public function accountsData($id){

            $req=$this->_db->query(" SELECT * FROM ".$id."_accounts WHERE id_user='$id' AND status='1' ORDER BY ".$id."_accounts.name ASC ");
            
            if($req === false){
                return false;
            }else{
                $res=$req->fetchAll();
                return $res;
            } 
        }


        // Méthod qui permet de récupérer la liste des comptes du user
        public function accounts($id){

            $req=$this->_db->query(" SELECT * FROM ".$id."_accounts WHERE id_user='$id' AND status='1' ORDER BY ".$id."_accounts.name ASC ");
            
            if($req === false){
                return false;
            }else{
                $res=$req->fetchAll();
                return $res;
            } 
        }

        // Méthod qui permet de récupérer la liste des comptes du user qui sont désactivés = corbeille
        public function accountsDataCorbeille($id){

            $req=$this->_db->query(" SELECT * FROM ".$id."_accounts WHERE id_user='$id' AND status='0' ");
            
            if($req === false){
                return false;
            }else{
                $res=$req->fetchAll();
                return $res;
            } 
        }

        // Méthod qui permet de récupérer un résultat de la barre de recherche
        public function accountSearchBar($id,$keyword){

            $req=$this->_db->query(" SELECT * FROM ".$id."_accounts WHERE name LIKE '%".$keyword."%' AND status='1' ORDER BY name ASC LIMIT 0, 10 ");

            if($req === false){
                return false;
            }else{
                $res=$req->fetchAll();
                return $res;
            } 
        }

        // Méthod qui permet de mettre à jour les données de l'utilisateur
        public function updateUserData($data,$idUser){

            $req=$this->_db->query(" UPDATE `users` SET $data WHERE `users`.`id` = $idUser; ");

            return CheckSQLReq($req);
        }
    }