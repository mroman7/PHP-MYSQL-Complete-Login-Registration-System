<?php 
// loading configuration file
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
        $fname = mysqli_real_escape_string($_POST['firstName']);
        $lname = mysqli_real_escape_string($_POST['lastName']);
        $email = mysqli_real_escape_string($_POST['email']);
        $pwd = mysqli_real_escape_string($_POST['password']);
        // encrypt password in SHA1 
        $password = SHA1($pwd);
        
        // INSERT DATA INTO "USERS" Table
        $s = "INSERT INTO users (first_name, last_name, email, password) VALUES(\"$fname\",\"$lname\",\"$email\",\"$password\");";
        echo 
        $query = mysqli_query($db_Connect, $s);
        if($query){
            // if data inserted successfully then redirect to homepage with "Success Flag"
            header("Location: index.php?flag=success");
        }
        else {
            // if data inserte failed redirect to homepage with "failed Flag"
            header("Location: index.php?flag=failed");
        }
    }
