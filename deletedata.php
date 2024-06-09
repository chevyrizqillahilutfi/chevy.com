<?php
//koneksi database
include_once("koneksi.php");

//get id from URL to delete that user
$NO = $_GET['NO'];

//deleted user row from table based on given is
$result = mysqli_query($mysqli, "DELETE FROM tabel user WHERE NO = '$NO'");

//after delete redirect to home, so that latest user list will be displayed
header("location:tabeluser.php");
?>