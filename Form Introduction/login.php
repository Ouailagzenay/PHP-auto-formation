<?php
    if(isset($_POST["username"], $_POST["password"])){
        $username = $_POST["username"];

        echo "Welcom $username to the website!";
    } else {
        echo "You need to enter your username and password";
    }
?>