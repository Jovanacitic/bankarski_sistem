<?php



$ID = mysqli_real_escape_string($bp, @$_REQUEST['ID']);
$Ime = mysqli_real_escape_string($bp, @$_REQUEST['Ime']);
$Kriterijum = mysqli_real_escape_string($bp, @$_REQUEST['Kriterijum']);
$Kredibilnost = mysqli_real_escape_string($bp, @$_REQUEST['Kredibilnost']);

$upit = "insert into Baza (ID, Ime, Kriterijum, Kredibilnost) values ('$ID','$Ime','$Kriterijum','$Kredibilnost')";
$rezultat = mysqli_query($bp, $upit);
if (!$rezultat) die(mysqli_error($bp));

header("Location: Baza_pregled.php?ID=$ID");