<?php
$mysqli = new mysqli('localhost', 'root', '', 'kts');
    $NO=$_GET["NO"];

    $result= mysqli_query($mysqli, "DELETE FROM tabel user WHERE NO='$NO'");
    header("location:tabeluser.php");
?>