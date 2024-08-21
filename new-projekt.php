<?php
include_once 'includes/functions.php';
include_once 'includes/header.php';
$user->checkLoginStatus();



?>


<div class="container">
<h2>Skapa ny projekt</h2>
		<form action="" method="POST">
		
        <input type="button" onclick="window.location.href='ny-kund.php'" name="order-info" value="Skapa ny kund"><br><br>

        <input type="button" onclick="window.location.href='ny-bil.php'" name="order-info" value="Skapa ny bil"><br><br>

			<label for="s_info">Problem:</label><br>
			<textarea id="s_info" name="sinfo" rows="4" cols="50" value=""></textarea><br><br>
            
            <label for="s_info">Arbetsbekrivning:</label><br>
			<textarea id="s_info" name="sinfo" rows="4" cols="50" value=""></textarea><br><br>

			<input type="submit" name="ny-projekt" value="Submit">
		</form>

</div>	

<?php 
include_once 'includes/footer.php';
?>