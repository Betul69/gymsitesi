<!DOCTYPE html>
<html>
<head>
<h2>GYM website</h2>
    <title>Kayıt olma</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .signup-container {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 100px auto;
            max-width: 400px;
            padding: 20px;
        }
        
        h1 {
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .form-group input {
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            padding: 10px;
            width: 100%;
        }
        
        .form-group input[type="submit"] {
            background-color: #4caf50;
            border: none;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            padding: 10px;
            width: auto;
        }
        
        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h1>Kayıt ol </h1>
        <form>
            <div class="form-group">
                <label for="username">Kullanıcı adı:</label>
                <input type="text" id="username" name="username" required>
            </div>
			<div class="form-group">
                <label for="name">Adınız:</label>
                <input type="text" id="name" name="name" required>
            </div>
			<div class="form-group">
                <label for="lastname">Soyadınız:</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
			<div class="form-group">
                <label for="birthdate">Doğum Tarihi:</label>
                <input type="date" id="date" name="birthdate" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">şifre:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Hesap Oluştur">
            </div>
			Hesabınız var mı? <a href="login.php">Oturum Aç</a>
        </form>
    </div>
</body>
<?php
require 'config.php';
if(isset($_POST["submit"]))
{
	$username=$_post["username"];
	$name=$_post["name"];
	$lastname=$_post["lastname"];
	$birthdate=$_post["birthdate"];
	$email=$_post["email"];
	$password=$_post['password'];
$sql = "INSERT INTO accounts (username,name,lastname,dogum,email,password) VALUES ('$username' ,'$name','$lastname','$birthdate','$email','$password')";
mysqli_query($conn,$sql);
header("Location:login.php");
}
?>
</html>

