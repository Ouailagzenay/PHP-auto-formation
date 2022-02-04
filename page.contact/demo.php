<?php
if ($_POST['name']|| $_POST['email']||$_POST['messager']){
    echo 'the name is : '.$_POST['name']."<br>";
    echo 'the email is : '.$_POST['email']."<br>";
    echo 'the messager is : '.$_POST['messager'];
}