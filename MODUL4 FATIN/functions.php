<?php
$conn = mysqli_connect('localhost', 'root', '', '09-fatin');

if (!$conn){
    echo "<script>
            alert('Failed Connect into Database');
            </script>";
}

function daftar($data) {
    global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$hp = htmlspecialchars($data["hp"]);
	$password = htmlspecialchars($data["password"]);
	$password2 = htmlspecialchars($data["password2"]);

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES ('', '$nama', '$email', '$hp', '$password')");
   

    return mysqli_affected_rows($conn);


}
?>

