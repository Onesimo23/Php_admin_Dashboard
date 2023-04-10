<?php
	include_once("../db.php");
	
	//Criando as Variaveis que armazenam os dados digitados pelo usuario
		$name= $_POST['name'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		
// /**		if (isset($email) ) {
			
// 			echo "o campo email é obrigatorio";
// 			exit;
// 		}

	//cadastra  dados digitado no formulário  - MYSQLI
		$query = mysqli_query($conectar,  "INSERT INTO users (name, contact, email, username, password) VALUES ('$name', '$contact', '$email', '$username', '$password')");
		
/*PDO
	$stmt = $pdo->prepare("INSERT INTO users (name, contact, email, username, password) VALUES (?, ?, ?, ?, ?)");
	$stmt->execute([$name, $contact, $email, $username, $password]);
*/
	
	//Rediriciona para a pagina com a menssagem de sucesso
		header("location: addMsg.php");
?>