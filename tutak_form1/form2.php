<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form2Answ.php" method="post">
        <label for="imie">Podaj imie:
            <input type="text" name="imie">
        </label> <br>
        <label for="wiek">Podaj wiek:
            <input type="number" name="wiek">
        </label> <br>
        <label for="m">
            <input type="radio" name="plec" id="m"> Mężczyzna
        </label> <br>
        <label for="k">
            <input type="radio" name="plec" id="k"> Kobieta
        </label> <br>
        Ulubiony kolor:
        <label for="kolor">
            <select name="kolor">
                <option value="czerwony">czerwony</option>
                <option value="niebieski">niebieski</option>
                <option value="zielony">zielony</option>
            </select>
        </label><br>
        Ulubiona seria gier: <br>
        <label for="FIFA">
            <input type="checkbox" name="FIFA" id="FIFA" value="FIFA">FIFA
        </label><br>
        <label for="CS2">
            <input type="checkbox" name="CS2" id="CS2" value="CS2">CS2
        </label><br>
        <label for="GTA">
            <input type="checkbox" name="GTA" id="GTA" value="GTA">GTA
        </label><br>
        <input type="submit" value="Wyslij">
    </form>
</body>
</html>