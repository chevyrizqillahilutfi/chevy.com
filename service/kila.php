<?php

include("../login/databese.php.php");

// cel apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){

    $NO = $_POST['NO'];
    $JENIS_SAPI=$_POST['JENIS SAPI'];
    $HARGA=$_POST['HARGA'];

    // buat query update
    $result = mysqli_query($mysqli, "UPDATE table_import
    SET JENIS SAPI='$JENIS_SAPI' ,HARGA='$HARGA',
    WHERE NO=$NO");
    header('Location: ../tabeluser/index.php');
} else {
    die("Akses dilarang...");
}
?>