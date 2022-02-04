<?php
if($_POST['name'] || $_POST['age']){
    echo "welcome" . $_POST['name'] . '<br/>';
    echo 'you are '. $_POST['age']. 'years olt';
}
?>