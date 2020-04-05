<?php



$ID = (int) @$_REQUEST['ID'];
$Ime = mysqli_real_escape_string($bp, @$_REQUEST['Ime']);
$Kriterijum = mysqli_real_escape_string($bp, @$_REQUEST['Kriterijum']);
$Kredibilnost = mysqli_real_escape_string($bp, @$_REQUEST['Kredibilnost']);

$upit = "update Baza set Ime='$Ime', Kriterijum='$Kriterijum', Kredibilnost='$Kredibilnost' where ID=$ID";
$rezultat = mysqli_query($bp, $upit);
if (!$rezultat) die(mysqli_error($bp));

header('Location: index.php');