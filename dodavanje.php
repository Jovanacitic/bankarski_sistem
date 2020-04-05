<?php

$ID = (int) @$_REQUEST['ID'];
$rezultat = mysqli_query($bp, "select * from Klijenti where ID=$ID");
if (!$rezultat) die(mysqli_error($bp));

$Klijenti = mysqli_fetch_object($rezultat);
if (!$Klijenti) die('Nepostojeci klijent');
?>
<html>
    <body>
        <h1><?php echo $Klijenti->Ime; ?> - dodavanje klijenta</h1>
        <form action="Baza_dodavanje_db.php" method="post">
            <input type="hidden" name="ID" value="<?php echo $Klijenti->ID; ?>" />
            Ime: <input type="text" name="Ime" /><br />
            Jed. mere:
            <select name="Kriterijum">
                <option value="nov">Novi klijent</option>
                <option value="postojeci">Postojeci klijenti</option>
            </select><br />
            Kredibilnost: <input type="text" name="Kredibilnost" /><br />
            <button type="submit">
                Dodavanje
            </button>
        </form>
    </body>
</html>