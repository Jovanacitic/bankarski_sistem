<?php

$ID = (int) @$_REQUEST['ID'];
$rezultat = mysqli_query($bp, "select * from Baza where ID=$ID");
if (!$rezultat) die(mysqli_error($bp));

$Baza = mysqli_fetch_object($rezultat);
if (!$Baza) die('Nepostojeci klijent');
?>
<html>
    <body>
        <form action="izmena_db.php" method="post">
            <input type="hidden" name="ID" value="<?php echo $Baza->ID; ?>" />
            Ime: <input type="text" name="Ime" value="<?php echo $Baza->Ime; ?>" /><br />
            Jed. mere:
            <select name="Kriterijum">
                <option value="nov" <?php if ($Baza->Kriterijum == 'kom') echo 'selected'; ?>>Novi klijent</option>
                <option value="postojeci" <?php if ($Baza->Kriterijum == 'kg') echo 'selected'; ?>>Postojeci klijenti</option>
            </select><br />
            Kredibilnost: <input type="number" name="Kredibilnost" value="<?php echo $Baza->Kredibilnost; ?>" /><br />
            <button type="submit">
                Izmena
            </button>
        </form>
    </body>
</html>