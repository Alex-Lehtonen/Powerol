<?php

function nyBil($pdo){
	
	$stmt_insertBil = $pdo->prepare('INSERT INTO table_bil (register, marke, modell, farg) VALUES (:register, :marke, :modell, :farg)');
	$stmt_insertBil->bindParam(':register', $_POST['register'], PDO::PARAM_STR);
	$stmt_insertBil->bindParam(':marke', $_POST['marke'], PDO::PARAM_STR);
	$stmt_insertBil->bindParam(':modell', $_POST['modell'], PDO::PARAM_STR);
	$stmt_insertBil->bindParam(':farg', $_POST['farg'], PDO::PARAM_STR);
	$stmt_insertBil->execute();
	


}

function nykund($pdo){
	
	$stmt_insertKund = $pdo->prepare('INSERT INTO table_kund (k_fname, k_lname, k_mail, k_tel, k_adress, k_ort, k_postnr) VALUES (:fnamn, :lnamn, :email, :ktel, :adress, :ort, :postnr)');
	$stmt_insertKund->bindParam(':fnamn', $_POST['fnamn'], PDO::PARAM_STR);
	$stmt_insertKund->bindParam(':lnamn', $_POST['lnamn'], PDO::PARAM_STR);
	$stmt_insertKund->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
	$stmt_insertKund->bindParam(':ktel', $_POST['ktel'], PDO::PARAM_STR);
	$stmt_insertKund->bindParam(':adress', $_POST['adress'], PDO::PARAM_STR);
	$stmt_insertKund->bindParam(':ort', $_POST['ort'], PDO::PARAM_STR);
	$stmt_insertKund->bindParam(':postnr', $_POST['postnr'], PDO::PARAM_STR);
	$stmt_insertKund->execute();
	


}

?>