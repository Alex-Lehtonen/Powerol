<?php
include_once 'includes/functions.php';
include_once 'includes/header.php';
$user->checkLoginStatus();

if(isset($_POST['ny-kund'])) {
	$insertKund=nykund($pdo);
}

?>


<div class="container">
<h2>Skapa ny kund</h2>
		<form action="" method="POST">
		
            <label for="fnamn">Förnamn:</label><br>
			<input type="text" id="fnamn" name="fnamn" value="" required="required"><br>

            <label for="efternamn">Efternamn:</label><br>
			<input type="text" id="lnamn" name="lnamn" value="" required="required"><br>

            <label for="email">Email:</label><br>
			<input type="text" id="email" name="email" value="" required="required"><br>

            <label for="ktel">Telefon nummer:</label><br>
			<input type="text" id="ktel" name="ktel" value="" required="required"><br>

            <label for="adress">Adress:</label><br>
			<input type="text" id="adress" name="adress" value="" required="required"><br>

            <label for="ort">Ort:</label><br>
			<input type="text" id="ort" name="ort" value="" required="required"><br>

            <label for="postnr">Post nummer:</label><br>
			<input type="text" id="postnr" name="postnr" value="" required="required"><br><br>

			<input type="submit" name="ny-kund" value="Submit">
		</form>

</div>	

<?php 
include_once 'includes/footer.php';
?>