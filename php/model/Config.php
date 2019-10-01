<?php

/**
   * Class of settings Data Base Mysql
   *
   * @param string $host
   * @param string $dbname
   * @param string $login
   * @param string $mdp
   * 
   */

class Config {

    private $host;
    private $dbname;
    private $login;
    private $mdp;

    // Geteurs
    public function getHost(){
        return $this->host;
    }

    public function getDbname(){
        return $this->dbname;
    }

    public function getLogin(){
        return $this->login;
    }

    public function getMdp(){
        return $this->mdp;
    }

    // Seteurs
    public function setHost($host){
        $this->host = $host;
    }
    
    public function setDbname($dbname){
        $this->dbname = $dbname;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function setMdp($mdp){
        $this->mdp = $mdp;
    }
}