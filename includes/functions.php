<?php

function nyBil($pdo){
	
	$stmt_insertBil = $pdo->prepare('INSERT INTO table_bil (register, märke, modell, färg) VALUES (:register, :märke, :modell, :färg)');
	$stmt_insertBil->bindParam(':register', $_POST['register'], PDO::PARAM_STR);
	$stmt_insertBil->bindParam(':märke', $_POST['märke'], PDO::PARAM_STR);
	$stmt_insertBil->bindParam(':modell', $_POST['modell'], PDO::PARAM_STR);
	$stmt_insertBil->bindParam(':färg', $_POST['färg'], PDO::PARAM_STR);
	$stmt_insertBil->execute();
	


}


?>