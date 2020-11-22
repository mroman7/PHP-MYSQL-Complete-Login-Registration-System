<?php
error_reporting(~E_ALL);
session_start();
// loading Database Configuration File
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
        // getting user's enter data
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        // encrypt password to SHA1 as in register to match
        $pass = SHA1($pwd);

        try{
            $s = "SELECT * FROM users WHERE email = \"$email\" AND password = \"$pass\"; ";
            $query = mysqli_query($db_Connect, $s);
            
            if($query){
                // check if a single record matched in database
                if(mysqli_num_rows($query) === 1){
                    // getting database data in "Associative array"
                    $user = mysqli_fetch_assoc($query);
                    // Setting SESSION Values with database value
                    $_SESSION["username"] = $user['first_name'];
                    $_SESSION["email"] = $user['email'];         
                    // after setting session values redirect to the "Home Page"
                    header("Location: home.php");                
                }
                else{
                    // if No Record matched redirect back to the Login Page
                    header("Location: index.php?login=false");
                }
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }