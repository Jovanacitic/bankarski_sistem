<?php

$ID = (int) @$_REQUEST['ID'];
$rezultat = mysqli_query($bp, "select * from Klijenti where ID=$ID");
if (!$rezultat) die(mysqli_error($bp));

$Klijenti = mysqli_fetch_object($rezultat);
if (!$Klijenti) die('Nepostojeci klijent');
?>
<html>
    <body>
        <form action="izmena_db.php" method="post">
            <input type="hidden" name="ID" value="<?php echo $Klijenti->ID; ?>" />
            Ime: <input type="text" name="Ime" value="<?php echo $Klijenti->Ime; ?>" /><br />
            <button type="submit">
                Izmena
            </button>
        </form>
    </body>
</html>