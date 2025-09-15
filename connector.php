<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "datamahasiswa";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Koneksi gagal : ". mysqli_connect_error());
}
// echo "Succ(essfully connected)"

?>