<?php
include_once 'includes/functions.php';
include_once 'includes/header.php';
$user->checkLoginStatus();



?>
<script>
function showHint(str) {
  if (str.length == 0) { 
    document.getElementById("match-list").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("match-list").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "search.php?q="+str, true);
    xmlhttp.send();
  }
}
</script>

<div class="container">
<h2>Skapa ny projekt</h2>
		<form action="" method="POST">
		
        <label for="fname">First name:</label>
         <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">

         <p>Suggestions: <span id="match-list"></span></p>

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