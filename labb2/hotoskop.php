<?php
$koksskap[0] = "bestick";
$koksskap[1] = "servetter";
$koksskap[2] = "påsar";
echo "<p>Översta lådan innehåller $koksskap[0] </p>";
echo "<p>Mittenlådan innehåller $koksskap[1] </p>";
echo "<p>Understa lådan innehåller $koksskap[2] </p>";
?>
<?php
$domains['se'] = "Sverige";
$domains['de'] = "Tyskland";
$domains['no'] = "Norge";
foreach ($domains as $index => $varde) {
    echo "<p>$index är landskod för $varde </p>";
}
?>$namn = "Ulrika Eriksson";
if (strstr($namn, " ")) {
    echo "Variabeln $namn innehåller mellanslag";
} else {
    echo "Variabeln $namn innehåller inte mellanslag";
}<?php
$fil = fopen("filnamn.txt", "r") or die("Kunde inte öppna fil");
$text = fread($fil, filesize("filnamn.txt"));
echo "<pre>$text</pre>";
fclose($fil);
?>
<?php
$fil = fopen("filnamn.txt", "w") or die("Kunde inte öppna fil");
$text = "Hej hopp!";
fwrite($fil, $text);
fclose($fil);
echo "Texten $text har skrivits till fil.";
?>