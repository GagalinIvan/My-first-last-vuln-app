
<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);
$connect = mysqli_connect('mariadb', 'root', '2101', 'users', 3306);
if(!$connect){
    die("Error");
}
else{
    echo "Good";
}
?>
