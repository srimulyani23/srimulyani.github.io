<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemesanan</title>
</head>

<body>
    <form action="" method="post">
        <table border="0" align="">
            <tr>
                <th colspan="2">
                    <h1>Form Pemesanan Nasi Kotak
                </th>
            </tr>
            </h1>
            <td><img src="rpl.jpg" width="90"></td>
            <tr>
                <td>Cabang :
                <td><select name="cabang">
                        <option value="PILIH CABANG">PILIH CABANG</option>
                        <option value="bandung">bandung</option>
                        <option value="majalengka">majalengka</option>
                        <option value="jakarta"> jakarta</option>
                    </select></td>
            </tr>
            <tr>
                <td>Nama Pelanggan :</td>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr><br>
            <tr>
                <td>Nomor HP :</td>
                <td>
                    <input type="text" name="nohp" id="nphp">
                </td>
            </tr><br>
            <tr>
                <td>Jumlah Kotak :</td>
                <td>
                    <input type="text" name="jumlah" id="jumlah">
                </td>
            </tr><br>
            <tr>
                <td>
                    <input type="submit" name="Pesan" value="Pesan">
                </td>
            </tr><br>
            </tr>
        </table>
    </form>
    <?php
   if (isset($_POST['submit'])){
	$_branch = $_POST['branch'];
	$nama = $_POST['nama'];
	$nohp = $_POST['nohp'];
	$jumlah = $_POST['jumlah'];

	echo "PEsanan telah diterima :<br>";
	echo "cabang :"  .$branch . "<br>";
	echo "nama :" .$nama . "<br>";
	echo "nomor hp :" .$nohp ."<br>";
	echo "jumlah kotak :" . $jumlah. "<br>";
   }
   ?>
</body>

</html>