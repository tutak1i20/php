<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <aside>
            <?php
                $do_bazy = mysqli_connect('localhost','root','','biblioteka');

                if(!$do_bazy){
                    echo "Blad polaczenia z serwerem MySQL";
                    exit;
                }else{
                    $zapytanie = mysqli_query($do_bazy, 'SELECT imie, nazwisko FROM autorzy ORDER BY nazwisko;');

                    if (!$zapytanie) {
                        mysqli_close();
                        echo "Blad w zapytaniu <br>";
                        exit;
                    }else{

                        echo "<ol>";
                        while ($wiersze = mysqlI_fetch_array($zapytanie)) {
                            echo "<li>","$wiersze[imie]"," ","$wiersze[nazwisko]","</li>";
                        }
                        echo "</ol>";
                        mysqli_close($do_bazy);
                    }
                }
            ?>
        </aside>
        <main>
                <label for="imie">imie:
                    <input type="text" name="imie" id="imie">
                </label> <br> <br>
                <label for="nazwisko">nazwisko:
                    <input type="text" name="nazwisko" id="nazwisko">
                </label> <br> <br>
                <label for="symbol">symbol:
                    <input type="number" name="symbol" id="symbol">
                </label> <br> <br>
                <input type="submit" value="wyslij" name="wyslij">

                <?php
                    $do_bazy = mysqli_connect('localhost','root','','biblioteka');

                    if(!$do_bazy){
                        echo "Blad polaczenia z serwerem MySQL";
                        exit;
                    }else{
                        $imie = $_POST['imie'];
                        $nazwisko = $_POST['nazwisko'];
                        $symbol = $_POST['symbol'];
                        $zapytanie = mysqli_query($do_bazy, "INSERT INTO czytelnicy (imie, nazwisko, kod) VALUES ('$imie','$nazwisko','$symbol')");
                    
                        if (!$zapytanie === true) {
                            echo "Nowy klient nie został dodany do bazy";
                        }else{
                            echo "<br> Czytelnik ".$nazwisko." ".$imie." został dodany do bazy.";
                        }
                        mysqli_close($do_bazy);
                    }
                ?>
        </main>




    </form>
</body>
</html>