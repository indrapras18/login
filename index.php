<?php 
include 'koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>halooo</title>
</head>
<body>
	<form method="POST">
<label>nama</label><br>
<input type="text" name="name"><br>
<label>email</label><br>
<input type="email" name="email"><br>
<label>komentar</label><br>
<textarea name="komentar"></textarea><br>
<button class="btn btn-primary" name="btn" type="submit">kirimsssss</button>
</form>
</body>
</html>
<?php
if (isset($_POST['btn'])){
$sql = mysqli_query($koneksi,"INSERT INTO komentar_user VALUES('','$_POST[name]','$_POST[email]','$_POST[komentar]')");
$id_login = $mysqli -> insert_id();
// echo json_encode("masuk dek");
// var_dump($sql);
}
  ?>