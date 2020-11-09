<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regex</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Hitta match med regex</h1>
        <form action="#" method="POST">
            <label>Ange text
                <input type="text" name="text" required>
            </label>
            <button>Skicka</button>
        </form>
        <?php
        /* Ta emot data som skickas */
        $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);

        if ($text) {
            echo "<h3>Inmattat</h3>";
            echo "<p>Text: <em>'$text'</em></p>";

            echo "<h3>Resultat</h3>";
            // Matcha "123"
            // Regex = regular expression = reguljära uttryck
            // På samma sätt som strstr()
            if (preg_match("/[a-zåäö]/", $text)) {
                echo "<p>&#10003; Innehåller en siffra.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE en siffra.</p>";
            }  
            // Nekativ matchning
            if (preg_match("/[^_]/", $text)) {
                echo "<p>&#10003; Innehåller en tecken.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE en tecken .</p>";
            }  
            if (preg_match("/[a-zåäö]/", $text)) {
                echo "<p>&#10003; Innehåller små eller stora boxtäver .</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE små eller stora boxtäver.</p>";
            }  
            if (preg_match("/a+/", $text)) {
                echo "<p>&#10003; Innehåller en eller flera a iföjd .</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE en eller flera a iföjd.</p>";
            }  
            if (preg_match("/a*/i", $text)) {
                echo "<p>&#10003; Innehåller  .</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE små eller stora boxtäver.</p>";
            }
            // Matcha ett antal, tex ipv4
            if (preg_match("/[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}./", $text)) {
                echo "<p>&#10003; Innehåller  .</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE små eller stora boxtäver.</p>";
            }
            

        }
        ?>
    </div>
</html>