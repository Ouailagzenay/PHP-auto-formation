<?php
$name = "user";
$value = "ouail";
setcookie($name , $value , time()+(5));
if(empty($_COOKIE[$name])){
echo "Cookie '" . $name . "' is set!<br>";

}else{
    echo " Cookie" . $name ."ist set <br>";
    echo "Value is " . $_COOKIE[$name] ;
}