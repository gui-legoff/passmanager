<?php

/**
   * Class of connexion to account user
   *
   * @param string $db
   * 
   */

    class Account extends Db {

        private $id;

        // fonction qui se déclenche automatiquement pour se connecter a la Db 
	    function __construct($db){
            parent::__construct($db);
        }

        /** Method qui permet de récuperer les infos du user
         * 
         *  @param string $idUser
         *  @param string $name
         *  @param string $login
         *  @param string $pass
         *  @param string $link
         *  @param string $notes
         * 
         */
        
        public function saveNewWebsite($idUser,$name,$login,$pass,$link,$notes){
            $req=$this->_db->query(" INSERT INTO ".$idUser."_accounts 
            (id_user, login, pass, name, link, notes, status) 
            VALUES 
            ('$idUser', '$login', '$pass', '$name', '$link', '$notes', '1')
            ");
            return CheckSQLReq($req);
        }


        /** Method qui permet de modifier une vignette compte
         * 
         *  @param string $id
         *  @param string $idUser
         *  @param string $name
         *  @param string $login
         *  @param string $pass
         *  @param string $link
         *  @param string $notes
         * 
         */

        public function updateWebsite($idUser,$id,$name,$login,$pass,$link,$notes){
            $req=$this->_db->query( "UPDATE ".$idUser."_accounts SET 
                `login` = '$login', `pass` = '$pass', `name` = '$name', `link` = '$link', `notes` = '$notes' WHERE ".$idUser."_accounts.`id` = $id;");
            return CheckSQLReq($req);
        }

        
        /** Method qui permet de modifier le statut d'une vignette compte pour le mettre dans la corbeille
         * 
         *  @param string $idUser
         *  @param string $idWebsite
         * 
         */

        public function sendToTrash($idUser,$idWebsite){
            $req=$this->_db->query( "UPDATE ".$idUser."_accounts SET `status` = '0' WHERE id = $idWebsite");
            return CheckSQLReq($req);
        }


        /** Method qui permet de recuperer un site depuis la corbeille
         * 
         *  @param string $idUser
         *  @param string $idWebsite
         * 
         */

        public function rescueWebsite($idUser,$idWebsite){
            $req=$this->_db->query( "UPDATE ".$idUser."_accounts SET `status` = '1' WHERE id = $idWebsite");
            return CheckSQLReq($req);
        }



        /** Method qui permet de supprimer une vignette compte
         * 
         *  @param string $idUser
         *  @param string $idWebsite
         * 
         */

        public function deleteWebsite($idUser,$idWebsite){
            $req=$this->_db->query( "DELETE FROM ".$idUser."_accounts WHERE id = $idWebsite");
            return CheckSQLReq($req);
        }


        /** Method qui permet de supprimer une vignette compte
         * 
         *  @param string $idUser
         * 
         */

        public function deleteAllWebsite($idUser){
            $req=$this->_db->query( "DELETE FROM ".$idUser."_accounts WHERE status = 0 ");
            return CheckSQLReq($req);
        }


   




        
    }

