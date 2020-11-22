<?php

class Config{
    protected $host = "127.0.0.1:3308";                 //Change this to your "Host Mame"
    protected $user = "root";                           //Your Host "Username"
    protected $password = "";                           //Your Host "Password"
    protected $db_name = "php_login_register";          //Your Database Name
    protected $link;

    public function connect(){
        // connecting with the database
        $this->link = new mysqli($this->host, $this->user, $this->password, $this->db_name);
        // checking for errors
        if(mysqli_connect_errno() > 0){            
            throw New Exception(mysqli_connect_error());
            exit();
        }
        return $this->link;
    }
}