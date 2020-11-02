<?php

/**
 * Skriv ett skript som frågar efter två heltal via ett formulär, det första talet ska vara lägre än det andra. Skriv ut alla heltal mellan de två som matats in. Separera med mellanslag. Varna om tal 1 är större än tal 2.
 * 
 * PHP version 7
 * @category   
 * @author     Erik Voragate <Patcharapon.voragate@gmail.com>
 * @license    PHP CC
 */
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./uppgif.css">
</head>
<body>
    <div class="container">
        <h1>Passwordmeter</h1>
        <form action="#" method="POST">
            <label for="epost">Ange lössenord</label>
            <input id="epost" class="form-control" type="text" name="lösen" required>
            <label for="adress">Ange adress</label>
            <input id="adress" class="form-control" type="text" name="adress" required>
            <label for="postnr">Ange postnr</label>
            <input id="postnr" class="form-control" type="text" name="postnr" required>
            <label for="postort">Ange postort</label>
            <input id="postort" class="form-control" type="text" name="postort" required>
            <label for="epost">Ange epost</label>
            <input id="epost" class="form-control" type="text" name="epost" required>
            <button type="submit" class="btn btn-primary">Skriv ut</button>
        </form>

        <?php
        // Läs in från formuläret och rensa från hot
        $epost = filter_input(INPUT_POST, "epost", FILTER_SANITIZE_STRING);

        // Om vi har data
        if ($lösen) {

        //Minimum 8 characters in length
        $längd = strlen($lösen);
        if ($längd <8) {
            echo
        }

        //Contains 3/4 of the following items
        $versaler = ["A","B","V","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","S","T","U","V","W","X","Y","Z","Å","Ä","Ö"];
        $pos = strpos(lösen, "K");
        foreach ($versaler as $versal) {
            # code...
        } ($pos === false) {
            #code...
        }
        
        //Uppercase Letteversalrs
        
        //Lowercase Letters

        //Numbers

        //Symbols

        
        }
        ?>
    </div>
</body>
</html>