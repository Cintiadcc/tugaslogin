<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "psdk";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Maaf gagal tersambung dengan database.')</script>");
}
 
?>