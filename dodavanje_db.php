<?php



$Ime = mysqli_real_escape_string($bp, @$_REQUEST['Ime']);

$upit = "insert into Klijenti (Ime) values ('$Ime')";
$rezultat = mysqli_query($bp, $upit);
if (!$rezultat) die(mysqli_error($bp));

header('Location: index.php');