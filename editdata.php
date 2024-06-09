<?php
        include("koneksi.php");
        if(!isset($_GET['NO'])){
            header('location:tabeluser.php');
        }
        $id = $_GET['NO'];
        $result = mysqli_query($mysqli,"SELECT * FROM tabel user WHERE NO=$NO");
        while($user_data = mysqli_fetch_array($result))
        {
            $JENIS_SAPI = $user_data['JENIS_SAPI'];
            $HARGA = $user_data['HARGA'];
            $AKSI = $user_data['AKSI'];
        }
        ?>
    

</body>
    <head>
        <title>Update Data</title>
        <link rel="stylesheet" href="editdatauser.css">
    </head> 
    <body>
       <header>
        <div class= judul><h3>Update Data User</h3></div>
       </header> 
        <form method="POST" action="koneksiedituser.php">
            <table>
                <tr><td>jenis_sapi</td>
                    <td><input type="teks" name="jenis_sapi" value="<?php echo $jenis_sapi?>"></td>
                </tr>
                <tr><td>harga</td>
                    <td><input type="teks" name="harga" value="<?php echo $harga?>"></td>
                </tr>
                <tr><td>aksi</td>
                    <td><select name="aksi" id="aksi" required>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        </select>
                    </td>
                </tr>
                <tr><td><input type="hidden" name="NO" value=<?php echo $_GET['NO'];?>></td>
                    <td><input type="submit" name="simpan" value="simpan"></td>
                </tr>
            </table>
    </div>