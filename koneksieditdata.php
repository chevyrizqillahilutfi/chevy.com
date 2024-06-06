<?php

include ("koneksi.php");

//cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){

    $NO=$_POST['NO'];
    $JENIS_SAPI=$_POST['JENIS_SAPI'];
    $HARGA=$_POST['HARGA'];
    $AKSI=$_POST['AKSI'];

    // buat query update
    $result = mysqli_query($mysqli, "UPDATE tabel user
    SET JENIS_SAPI='$JENIS_SAPI',HARGA='$HARGA',AKSI='$AKSI'
    WHERE NO=$NO");
    header('location:editdatauser.php');
}else{
    die("Akses dilarang....");
}
?>