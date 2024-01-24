<?php

require 'koneksi.php';

session_start();
 
include 'koneksi.php';
 

$username = $_POST['username'];
$password = $_POST['password'];
 
 
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['level']=="admin"){
 
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:halaman_admin.php");
 
	}else if($data['level']=="user"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "user";
		header("location:halaman_user.php");
 

	}else if($data['level']=="pengurus"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengurus";
		header("location:halaman_pengurus.php");
 
	}else{
 
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 <div class=" flex items-center">
<div class="kotak_login w-3/12 mx-auto">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="]" method="post" class="">
			<label>Username</label>
			<input type="text" name="username" class="form_login border-2 rounded-md focus:outline-none px-1 w-64 py-2" placeholder="Username .." required="required"><br>
 
			<label>Password</label>
			<input type="password" name="password" class="form_login border-2 rounded-md focus:outline-none px-1 w-64 py-2" placeholder="Password .." required="required"><br>
 
			<button type="button"  name="login" value="login" class="bg-blue-500 p-2 px-4 rounded-lg">Login</button>
		</form>
		
	</div>
 </div>
	
        
</body>
</html>