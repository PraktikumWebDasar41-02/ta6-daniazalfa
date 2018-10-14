<form method="post">
  Cerita : <br>
  <input type="textarea" name="cerita" ><br><br>
  Input foto : <br>
  <input type="file" name="gambar"><br><br>
  <input type="submit" name="submit">
</form>
<?php
	if (isset($_POST['submit'])) {

		session_start();
		$cerita = $_POST['cerita'];
		$target_dir= "gambar/";
		$target_file=$target_dir.basename($_FILES['gambar']['name']);
		if (move_uploaded_file($_FILES['gambar']['tmp_name'],$target_file)) {
			echo "berhasil";
		}else{
			echo "gagal";
		}
		$_SESSION['cerita']=$cerita;
		$_SESSION['gambar']=$target_file;

		header("location:lihatposting.php");
	}

	?>
