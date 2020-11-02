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
        echo "<h1>Dagens horoskop</h1>";

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


        ?>
    </div>
</body>
</html>