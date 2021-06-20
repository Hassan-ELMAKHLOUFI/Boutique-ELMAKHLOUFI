<?php 



	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
        $USERNAME_U = $user_name;
        $PASSWORD_U = $password;
		if($user_name !== '' && $password !=='')
		{ 
            $pdo = new PDO('mysql:host=localhost;dbname=boutique;charset=utf8',"root","");	
            $query = "SELECT * FROM USERS WHERE username=? AND password=?";
            $stm= $pdo->prepare($query);
            $stm->execute(array($USERNAME_U,$PASSWORD_U));
              $user = $stm->fetch();
            if ($user){
                header("Location: http://localhost/Boutique/singnup.php");
                exit();
            }else {
           
                $NAME_U="test";
                $query = "INSERT INTO USERS VALUES(NULL,?,?)";
                $stm= $pdo->prepare($query);
                $stm->execute(array($USERNAME_U,$PASSWORD_U));
                header("Location: http://localhost/Boutique/Auth_form.php");
              }


        }
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
</head>
<style type="text/css">

body{
		font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
		background-color:#8bb7d8;
	}
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	.box{

		background-color: #FFFFFF;
    width: 390px;
    height: 350px;
    margin: 9em auto;
    border-radius: 19px;
    box-shadow: 0px 10px 34px 2px rgba(0, 0, 0, 0.14);
	}
	.sign {
    padding-top: 40px;
    color: #bb1b1b;
    font-family: 'Ubuntu', sans-serif;
    font-weight: bold;
    font-size: 23px;
	}
	form.form1 {
    
}
.un {
width: 76%;
color: rgb(38, 50, 56);
font-weight: 700;
font-size: 14px;
letter-spacing: 1px;
background: rgba(136, 126, 126, 0.04);
padding: 10px 20px;
border: 1px solid #ff6969;
outline: none;
caret-color: red;
border-radius: 20px;
box-shadow: 0 2px 10px 0 rgb(117, 116, 116);
box-sizing: border-box;
margin-left: 46px;
text-align: center;
}

.submit {
  cursor: pointer;
    border-radius: 5em;
    color: #fff;
    background: linear-gradient(to right, #ec8080, #cf2b2b);
    border: 0;
    padding-left: 40px;
    padding-right: 40px;
    padding-bottom: 10px;
    padding-top: 10px;
    font-family: 'Ubuntu', sans-serif;
    margin-left: 35%;
    font-size: 13px;
    box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
}
.un:focus, .pass:focus {
    border: 2px solid rgba(0, 0, 0, 0.18) !important;
}

	.submit:hover{
      background: #eb0404;
      box-shadow: 0 12px 16px 0 black;
      cursor: pointer;
      }
	  #button:hover{
		background: #eb0404;
      box-shadow: 0 12px 16px 0 black;
      cursor: pointer;
	  }
	</style>

<body>

	<div class="box">
	<p class="sign" align="center">Sign Up</p>
		<form class="form1" method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input name="user_name" class="un" type="text" align="center" placeholder="Username"><br><br>
  			<input name="password" class="un" type="password" align="center" placeholder="Password"><br><br>

			<input id="button" class="submit" type="submit" value="Signup"><br><br>

			<a href="Auth_form.php" class="submit">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>