<?php
	include_once("../db.php");
	
	//Criando as Variaveis que armazenam os dados digitados pelo usuario
		$id	= $_POST['id'];
		$codig= $_POST['cod'];
		$name = $_POST['name'];
		$price = $_POST['price'];

	//Edita  dados digitado no formulário
		$query = mysqli_query($conectar, "UPDATE products
		 SET cod = '$codig', name = '$name',  price = '$price' WHERE id = '$id' ");

	/*PDO
		$stmt = $pdo->prepare("UPDATE users SET name=?, contact=?, email=?, username=?, password=? WHERE id=?");
		$stmt->execute([$name, $contact, $email, $username, $password, $id]);
	*/
	
	//Rediriciona para a pagina com a menssagem de sucesso
		header("location: editMsg.php");
?>