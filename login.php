<!DOCTYPE html>
<html>
<head>
<h2>GYM website</h2>
    <title>صفحة الدخول</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .login-container {
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
<?php
include("config.php");
require'config.php';
if(isset($_post['submit']))
{
	$username=$_post['username'];
	$password=$_post['password'];
$sql="SELECT * FROM accounts where kullanici='$username' AND password='$password'";
$result=mysqli_query($sql);
$numrows=mysql_num_rows(result);
if($numrows == 1)
{
	$row=mysql_fetch_assoc($result);
	$id=$row['id'];
	header("location:home_page.php?id=$id");
}
else
{
	echo "<center><h3><font color='red'> geçersiz kullanıcıadı yada şifre </font></h3></center><br>";
}
}
?>
    <div class="login-container">
        <h1>Giriş yap</h1>
        <form>
            <div class="form-group">
                <label for="username">Kullanıcı adı:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">şifre:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Giriş yap"><br><br>
				Hesabınız yok mu? <a href="register.php"> Kayıt Ol</a>
            </div>
        </form>
		
    </div>
</body>
</html>