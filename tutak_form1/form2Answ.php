<?php
    $imie = $_POST["imie"];
    $wiek = (int)$_POST["wiek"];
    $kolor = $_POST["kolor"];
    echo $imie."<br>";
    echo "Wiek: ".$wiek."<br>";

    if($_POST["plec"] == "m"){
        echo "Wybrana płeć: Mężczyzna <br>";
    }else{
        echo "Wybrana płeć: Kobieta <br>";
    }

    if ($kolor == "czerwony") {
        echo "Kolor: czerwony <br>";
    }else if ($kolor == "zielony"){
        echo "Kolor: zielony <br>";
    }else{
        echo "Kolor: niebieski <br>";
    }

    echo "Wybrana/-e przez ciebie gra/-y to: ";

    if (isset($_POST["FIFA"])) {
        echo "FIFA ";
    }
    if (isset($_POST["CS2"])) {
        echo "CS2 ";
    }
    if (isset($_POST["GTA"])) {
        echo "GTA ";
    }
?>