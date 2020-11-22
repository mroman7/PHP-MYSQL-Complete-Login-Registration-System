<?php

class Config{
    protected $host = "127.0.0.1:3308";
    protected $user = "root";
    protected $password = "";
    protected $db_name = "php_login_register";
    protected $link;

    public function connect(){
        $this->link = new mysqli($this->host, $this->user, $this->password, $this->db_name);
        // checking for errors
        if(mysqli_connect_errno() > 0){            
            throw New Exception(mysqli_connect_error());
            exit();
        }
        return $this->link;
    }
}