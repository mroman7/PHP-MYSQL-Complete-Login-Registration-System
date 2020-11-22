<?php
error_reporting(~E_ALL);
session_start();
require_once("Config.php");
    // creating Config Class Object
    $db_Connect = '';
    try{
        $config = new Config;
        $db_Connect = $config->connect();    
    }catch(Exception $e){
        echo $e->getMessage();
    }

    if(isset($_POST['submit_login'])){
        
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        // encrypt password to SHA1 as in register to match
        $pass = SHA1($pwd);

        try{
            $s = "SELECT * FROM users WHERE email = \"$email\" AND password = \"$pass\"; ";
            $query = mysqli_query($db_Connect, $s);
            if($query){
                if(mysqli_num_rows($query) === 1){
                    
                    $user = mysqli_fetch_assoc($query);
                    
                    $_SESSION["username"] = $user['first_name'];
                    $_SESSION["email"] = $user['email'];                    
                    header("Location: home.php");                
                }
                else{
                    header("Location: index.php?login=false");
                }
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }