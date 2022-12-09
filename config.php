<?php
$server ="localhost";
$username ="root";
$password ="";
$databases ="db_dssayangcoment";

$conn = mysqli_connect($server,$username,$password,$databases);

if(!$conn){ //if connect check
    die("<script>alert('conection')</script>");
}

?>

<?php
