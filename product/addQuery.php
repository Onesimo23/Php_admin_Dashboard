<?php
	include_once("../db.php");
	
	//Criando as Variaveis que armazenam os dados digitados pelo usuario
		$codig= $_POST['cod'];
		$name = $_POST['name'];
		$price = $_POST['price'];
		
		
		
// /**		if (isset($email) ) {
			
// 			echo "o campo email é obrigatorio";
// 			exit;
// 		}

	//cadastra  dados digitado no formulário  - MYSQLI
		$query = mysqli_query($conectar,  "INSERT INTO products (cod, name, price) 
		VALUES ('$codig', '$name', '$price')");
		
/*PDO
	$stmt = $pdo->prepare("INSERT INTO users (name, contact, email, username, password) VALUES (?, ?, ?, ?, ?)");
	$stmt->execute([$name, $contact, $email, $username, $password]);
*/
	
	//Rediriciona para a pagina com a menssagem de sucesso
		header("location: addMsg.php");
?>