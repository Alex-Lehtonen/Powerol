<?php
include_once 'includes/functions.php';
include_once 'includes/header.php';
$user->checkLoginStatus();

if(isset($_POST['ny-bil'])) {
	$insertBil=nyBil($pdo);
}

?>


<div class="container">
<h2>Skapa ny bil</h2>
		<form action="" method="POST">
		
            <label for="register">Register:</label><br>
			<input type="text" id="register" name="register" value="" required="required"><br>

            <label for="märke">Märke:</label><br>
			<input type="text" id="märke" name="märke" value="" required="required"><br>

            <label for="modell">Modell:</label><br>
			<input type="text" id="modell" name="modell" value="" required="required"><br>

            <label for="färg">Färg:</label><br>
			<input type="text" id="färg" name="färg" value="" required="required"><br>


			<input type="submit" name="ny-bil" value="Submit">
		</form>

</div>	

<?php 
include_once 'includes/footer.php';
?>