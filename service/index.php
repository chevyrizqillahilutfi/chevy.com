<?php

include  'databese.php' ;

$sql = "SELECT * FROM `tabel user`";
$result = mysqli_query($db, $sql);

?>
<table border="1">
    <tr>
        <th>JENIS SAPI</th>
        <th>HARGA</th>
        <th>AKSI</th>
    </tr>
    
    <?php
    while($row = mysqli_fetch_array($result)){ ?>
    <tr>
        <td><?php echo $row['JENIS_SAPI']; ?></td>
        <td><?php echo $row['HARGA']; ?></td>
    </tr>
    <?php   
    }
    ?>
   
</table>


