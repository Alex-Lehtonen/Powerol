<?php
include_once 'includes/functions.php';
include_once 'includes/header.php';
$user->checkLoginStatus();



?>


<div class="container">
<h2>Skapa ny kund</h2>
		<form action="" method="POST">
		
            <label for="s_name">Förnamn:</label><br>
			<input type="text" id="s_name" name="sname" value="" required="required"><br>

            <label for="s_name">Efternamn:</label><br>
			<input type="text" id="s_name" name="sname" value="" required="required"><br>

            <label for="s_name">Email:</label><br>
			<input type="text" id="s_name" name="sname" value="" required="required"><br>

            <label for="s_name">Telefon nummer:</label><br>
			<input type="text" id="s_name" name="sname" value="" required="required"><br>

            <label for="s_name">Adress:</label><br>
			<input type="text" id="s_name" name="sname" value="" required="required"><br>

            <label for="s_name">Ort:</label><br>
			<input type="text" id="s_name" name="sname" value="" required="required"><br>

            <label for="s_name">Post nummer:</label><br>
			<input type="text" id="s_name" name="sname" value="" required="required"><br><br>

			<input type="submit" name="ny-kund" value="Submit">
		</form>

</div>	

<?php 
include_once 'includes/footer.php';
?>