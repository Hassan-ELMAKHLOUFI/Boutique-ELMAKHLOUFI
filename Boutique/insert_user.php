<?php 


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if($user_name !== '' && $password !=='')
		{ 

            $pdo = new PDO('mysql:host=localhost;dbname=boutique;charset=utf8',"root","");	
            
			$USERNAME_U = $user_name;
			$PASSWORD_U = $password;
            $NAME_U="test";
			$query = "INSERT INTO USERS VALUES(NULL,?,?,?)";
            $stm= $pdo->prepare($query);
            $stm->execute(array($USERNAME_U,$PASSWORD_U,$NAME_U));

	}}
?>