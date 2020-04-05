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
        <table border=1>
            <tr>
                <td>ID</td>
                <td>Ime</td>
                <td>Kriterijum</td>
                <td>Kredibilnost</td>
            </tr>
            <?php
            $rezultat = mysqli_query($bp, "select * from Baza where ID={$Klijenti->ID}");
            if (!$rezultat) die(mysqli_error($bp));
            while ($red = mysqli_fetch_object($rezultat))
            {
                echo "<tr>";
                echo "<td>{$red->ID}</td>";
                echo "<td>{$red->Ime}</td>";
                echo "<td>{$red->Kriterijum}</td>";
                echo "<td>{$red->Kredibilnost}</td>";
                echo "<td><a href='izmena.php?ID={$red->ID}'>Izmena</a></td>";
                echo "<td><a href='uklanjanje.php?ID={$red->ID}'>Uklanjanje</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <a href="dodavanje.php?ID=<?php echo $Klijenti->ID; ?>">Dodavanje klijenta</a>
        <a href="index.php">Klijentii</a>
    </body>
</html>