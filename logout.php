<?php
session_start();
// removing/destroying session completely
if(session_destroy()){
    // if session destroyed redirect to Login Page
    header("Location: index.php");
}
else {
    echo "Something Went Wrong";
}

