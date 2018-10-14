<?php
session_start();
include 'conn.php';
$nim2 = $_SESSION['id'];
$qry = "SELECT * FROM t_jurnal1 WHERE nim = '$nim2'";
$hasil=$simpan->query($qry);
if($hasil==true){
	foreach($hasil as $value){
		$nama2=$value['nama'];
		$nim2=$value['nim'];
		$kelas2=$value['kelas'];
		$gender2=$value['jeniskelamin'];
		$hobi2=$value['hobi'];
		$fakultas2=$value['fakultas'];
		$alamat2=$value['alamat'];
	}
}

?>


<form method="post" action="posting.php">
<h2>Data diri User</h2><br><br>
NIM :<?php echo $nim2."<br>"; ?><br>
Nama :<?php echo $nama2."<br>"; ?><br>
kelas :<?php echo $kelas2."<br>"; ?><br>
Jenis kelamin :<?php echo $gender2."<br>"; ?><br>
Hobi :<?php echo $hobi2."<br>"; ?></td><br>
fakultas :<?php echo $fakultas2."<br>"; ?></td><br>
alamat :<?php echo $alamat2."<br>"; ?></td><br>
<input type="submit" name="Posting" value="posting">

</form>
<?php
if (isset($_POST['posting'])) {
	session_destroy();

}
 ?>
