<h2>REGISTRASI</h2><br><br>
<form method="POST">
	<table>
		<tr>
			<td>NIM :</td>
			<td><input type="text" name="nim" required></td>
		</tr>
		<tr>
			<td>Nama :</td>
			<td><input type="text" name="nama" required></td>
		</tr>
		<tr>
			<td>Kelas :</td>
			<td>
				<input type="radio" name="kelas" value="MI4101">D3MI4101 <br>
				<input type="radio" name="kelas" value="MI4102">D3MI4102<br>
				<input type="radio" name="kelas" value="MI4102">D3MI4103
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin :</td>
			<td>
				<input type="radio" name="gender" value="Perempuan">Perempuan <br>
				<input type="radio" name="gender" value="Laki-Laki">laki-laki
			</td>
		</tr>
		<tr>
			<td>Hobi :</td>
			<td>
				<input type="checkbox" name="hobi" value="renang">Renang<br>
				<input type="checkbox" name="hobi" value="Voli">Voli<br>
				<input type="checkbox" name="hobi" value="basket">Basket<br><br><br>
			</td>
		</tr>
		<tr>
			<td>Fakultas :</td>
			<td><select name="fak">
				<option value="FIT">FIT</option>
				<option value="FIK">FIK</option>
				<option value="FKB">FKB</option>
				<option value="FEB">FEB</option>
			</select></td>
		</tr>
		<tr>
			<td>Alamat :</td>
			<td><input type="text" name="alamat" required></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>
	</table>
</form>

<?php
include 'conn.php';
if (isset($_POST['submit'])) {
	if (strlen($_POST['nim'])==10){
	$nim1 = $_POST['nim'];
	}else{
		echo "NIM Harus berisi 10 angka"."<br>";
	}
	if (strlen($_POST['nama'])<35){
		$nama1 = $_POST['nama'];
	}else{
		echo "Nama Harus berisi Kurang dari 35 huruf"."<br>";
	}
	if (isset($_POST['kelas'])) {
		$kelas1=$_POST['kelas'];
	}
	if (isset($_POST['gender'])) {
		$gender1 = $_POST['gender'];
	}
	if (isset($_POST['hobi'])) {
		$hobi1= $_POST['hobi'];
		$hobi2=$_POST['hobi'];
		$hobi3=$_POST['hobi'];
	}

   	$fakultas1 = $_POST['fak'];
	$alamat1 = $_POST['alamat'];

	session_start();
	$_SESSION['id'] = $nim1;

	$qry = "INSERT INTO t_jurnal1 VALUES ($nim1,'$nama1','$kelas1','$gender1','$hobi1','$fakultas1','$alamat1')";
	$tambah=$simpan->query($qry);
	if($tambah==true){
		echo "Berhasil";
		header("Location:login.php");
	}else{
		echo "Gagal";
	}
}
 ?>
