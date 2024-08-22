<?php

include_once 'config.php';
$input = "%".$_GET['q']."%";

$stmt_searchClassmates = $pdo->prepare("SELECT * FROM table_kund WHERE k_fname LIKE :fname OR k_lname LIKE :lname");
$stmt_searchClassmates->bindParam(":fname", $input, PDO::PARAM_STR);
$stmt_searchClassmates->bindParam(":lname", $input, PDO::PARAM_STR);
$stmt_searchClassmates->execute();

while ($row = $stmt_searchClassmates->fetch(PDO::FETCH_ASSOC)) {
    echo $row['k_fname']." ".$row['k_lname']."<br>";
}
?>