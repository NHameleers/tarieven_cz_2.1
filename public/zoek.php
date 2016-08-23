<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("index.php", ["title" => "Zoek zorgcode"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["zorgcode"]))
        {
            apologize("Vul een omschrijving of zorgcode in.");
        }

        // query database for user
        $procedures = query("SELECT * FROM zorg WHERE MATCH (declaratiecode, zorgproductcode, omschrijving) AGAINST (? IN BOOLEAN MODE) ORDER BY declaratiecode, zorgproductcode, tarief", $_POST["zorgcode"]);
        
        // prepare arrays with only the unique values of omschrijving and declaratiecode.
        $unieke_omschrijvingen = array_unique(array_column($procedures, 'omschrijving'));
        $unieke_decl_codes = array_unique(array_column($procedures, 'declaratiecode'));

        // check of er 1 of meer zorgproducten zijn gevonden.
        // als er maar 1 gevonden is, laat dan meteen resultaat zien.
        if (count($unieke_omschrijvingen) == 1)
        {
            render("resultaat.php",
            ["procedures" => $procedures,
            "title" => "Resultaten"]);
        }

        // zijn er meer gevonden, laat gebruiker dan een product kiezen.
        else if (count($unieke_omschrijvingen) > 1)
        {
            render("zorgkeuze.php", 
            ["unieke_omschrijvingen" => $unieke_omschrijvingen,
            "unieke_decl_codes" => $unieke_decl_codes,
             "title" => "Kies uw zorg"]);
        }
        // else apologize
        else {
            apologize("De omschrijving of zorgcode '{$_POST["zorgcode"]}' kon niet gevonden worden.");
        }

    }

?>
