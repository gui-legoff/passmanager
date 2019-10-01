<?php

/**
   * Class of connexion to account user
   *
   * @param string $login
   * @param string $pass
   * @param string $db
   * 
   */

    class Connexion extends Db {

        private $login;
        private $pass;

        // fonction qui se déclenche automatiquement pour se connecter a la Db 
	    function __construct($db){
            parent::__construct($db);
        }   

        // Connection a l'espace personnel du User
        public function connect($login,$pass){
            
            $req=$this->_db->query(" SELECT id FROM users WHERE login='$login' AND password='$pass' ");  
            $nb=$req->rowCount();

            // Si un résultat est obtenu c'est qu'une association login / mot de passe on matché
            if($nb === 1){

                // Requète permettant de mettre a jour la date exacte de la connexion en cours
                $req2=$this->_db->query(" UPDATE users SET last_connexion = NOW() WHERE login='$login' AND password='$pass' ");

                $res=$req->fetchAll();
                foreach($res as $r){
                    return $r['id'];                    
                }
            }else{
                return false;
            }
        }

        // Creer une table user
        public function CreateTableUser($nameTable){
            $req=$this->_db->query("
                CREATE TABLE '$nameTable'_accounts
                (
                    id INT PRIMARY KEY NOT NULL,
                    nom VARCHAR(100),
                )
            ");
        }

        // Process d'inscription
        public function inscription($login,$pass,$pseudo){
            
            // Insert into table users the new user
            $req=$this->_db->query("INSERT INTO `users` (`id`, `login`, `password`, `pseudo`, `last_connexion`, `actif`) VALUES (NULL, '$login', '$pass', '$pseudo', NOW(), '1');");
            
            // Get his id
            $req2=$this->_db->query(" SELECT id FROM users WHERE login='$login' AND password='$pass' ");
            $res2=$req2->fetchAll();
            foreach($res2 as $r){$idUser = $r['id'];}

            // Create table
            $query3 = "CREATE TABLE ".$idUser."_accounts
            (
                id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                id_user INT NOT NULL,
                login VARCHAR(255) NOT NULL,
                pass VARCHAR(255) NOT NULL,
                name VARCHAR(255) NOT NULL,
                link TEXT NOT NULL,
                notes TEXT NOT NULL,
                status INT NOT NULL
            )";

            $req3=$this->_db->query($query3);

            // var_dump($query3);
            // var_dump($req3);
            // exit;

            return $idUser;
        }
    }

