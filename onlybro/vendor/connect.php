
<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);
$connect = mysqli_connect('172.22.0.2', 'root', '1234', 'users', 3306);
if(!$connect){
    die("Error");
}
else{
    echo "Good";
}
?>
