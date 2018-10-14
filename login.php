<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" >
	<h2>LOGIN</h2>
Nama :<input type="text" name="nama"><br><br>
Nim :<input type="text" name="nim"><br><br>
<input type="submit" name="submit" value="submit"></td>
</form>

<?php
$simpan = mysqli_connect("localhost","root","","pendaftaran");
if (isset($_POST['submit'])) {
		$nim2=$_POST['nim'];
		$nama1 = $_POST['nama'];
  $qry = "SELECT * FROM t_jurnal1 WHERE nim = '$nim2'";
    $save = mysqli_query($simpan, $qry);
    $masuk = mysqli_num_rows($save);
    if($masuk > 0){
    session_start();
    $_SESSION['nama'] = $nama2;
$nim2 = $_SESSION['id'];
        header("location:halamanawal.php");
    }else{
     echo "<script>
            alert('Gagal Login');
        </script>";
}
}
?>
