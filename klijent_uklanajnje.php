<?php

$ID = (int) @$_REQUEST['ID'];

$upit = "delete from Baza where ID=$ID";
$rezultat = mysqli_query($bp, $upit);
if (!$rezultat) die(mysqli_error($bp));

header('Location: index.php');