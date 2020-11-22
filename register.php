<?php 
require_once("Config.php");
    // creating Config Class Object
    $config = new Config;
    
    $db_Connect = '';
    try{
        $db_Connect = $config->connect();    
    }catch(Exception $e){
        echo $e->getMessage();
    }

    if(isset($_POST['submit_registeration'])){
        // getting values from user
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        // encrypt password in SHA1 
        $password = SHA1($pwd);
        
        // INSERT DATA INTO "USERS" Table
        $s = "INSERT INTO users (first_name, last_name, email, password) VALUES(\"$fname\",\"$lname\",\"$email\",\"$password\");";
        echo 
        $query = mysqli_query($db_Connect, $s);
        if($query){
            header("Location: index.php?flag=success");
        }
        else {
            header("Location: index.php?flag=failed");
        }
    }


?>