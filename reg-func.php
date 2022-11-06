<?php 
require 'connection.php';
if( isset($_POST["register"]) ) {
	if( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
	} else {
		echo mysqli_error($conn);
	}
}
function registrasi($data) {
	global $conn;
	$name = strtolower(stripslashes($data["name"]));
	$username = strtolower(stripslashes($data["username"]));
  	$phone_number = strtolower(stripslashes($data["phone_number"]));
	$email = strtolower(stripslashes($data["email"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$result = mysqli_query($conn, "SELECT username FROM tb_user WHERE username = '$username'");
	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
		return false;
	}
	if( $password !== $password2 ) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
		return false;
	}
	$password = password_hash($password, PASSWORD_DEFAULT);
	mysqli_query($conn, "INSERT INTO tb_user VALUES('', '$name', '$username', '$phone_number', '$email', '$password')");
	return mysqli_affected_rows($conn);
}
?>