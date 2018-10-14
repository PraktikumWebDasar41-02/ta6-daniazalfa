<?php
session_start();
	$cerita = $_SESSION['cerita'];
	echo $cerita; echo "<br><br><br>";
	$gambar = $_SESSION['gambar'];
	echo "<img src='".$gambar."'>"; echo "<br>";

if (isset($_POST['submit'])) {
	// session_start();
	// $_SESSION['nama']=$nama;


}
?>
