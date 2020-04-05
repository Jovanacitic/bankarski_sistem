<?php

$ID = (int) @$_REQUEST['ID'];
$Ime = mysqli_real_escape_string($bp, @$_REQUEST['Ime']);

$upit = "update Klijenti set Ime='$Ime' where ID=$ID";
$rezultat = mysqli_query($bp, $upit);
if (!$rezultat) die(mysqli_error($bp));

header('Location: index.php');