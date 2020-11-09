<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dagens horoskop</title>
    <link rel="stylesheet" href="./horoskop.css">
</head>
<body>
    <div class="kontainer">
        <?php
        echo "<h1>Dagens horoskop</h1>";q

        // Hämta sidan
        $sidan = file_get_contents("https://astro.elle.se");

        // Sök början på texten
        $start = strpos($sidan, "<div class=\"c-post_content__wrapper\">") ;
        if ($start !== false) {
            echo "<p>Horoskopet började på position $start</p>";
        } else {
            echo "<p>Hittade inte horoskopets början!</p>";
        }

        //Hitta slutet 
        $slut = strpos($sidan, "c-post__wrapper",$start);
        if ($start !== false) {
            echo "<p>Horoskopet sluta på position $slut</p>";
        } else {
            echo "<p>Hittade inte horoskopets början!</p>";
        }
        echo "<p>Horoskopet slutar på position $slut</p>"
        echo "<p>Hitta slutet på position $slut</p>"

        // första delen före annonsen
$start = strpos($horoskopText, "<div class="o-indenter">");
$slut = strpos($horoskopText, "</div>");
$del1 = substr($horoskopText, $start, $slut - $start);
echo "$del1</div>\n";

//Andra delen:
$start = strpos($horoskopText, "<div class="o-indenter">", $slut);
$slut = strpos($horoskopText, "</div>");
$del1 = substr($horoskopText, $start, $slut - $start);
echo "$del1</div>\n";


        ?>
    </div>
</body>
</html>