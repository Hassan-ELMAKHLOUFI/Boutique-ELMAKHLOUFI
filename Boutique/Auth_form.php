<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Authentication</title>
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

    <form action="authCheck.php" method="POST">
    <div style="font-size: 20px;margin-left: 150px; margin-bottom: 50px; margin-top: 150px !important; color: red !imporatant; ">Log in</div>

        <input class="un" type="text" name="username" id="username" align="center" placeholder="Username"><br><br>

        <input class="un" type="password" name="password" id="password" align="center" placeholder="Password"><br><br>
        <input id="button" class="submit" type="submit" value="Login"><br><br>
        <a href="singnup.php" class="submit">Signup</a><br><br>
    
    
    </form>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>