<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: solid, 1px, black;
        }
    </style>
</head>
<body>
    <?php
        $serwer = "localhost";
        $user = "root";
        $passwd = "";
        $dbname = "klienci";
    
        $connect = mysqli_connect($serwer, $user, $passwd, $dbname);
    
        if(mysqli_connect_errno()){
            echo "Connection failed ".mysqli_connect_error();
            ?>
            </body>
            </html>
            <?php
            exit;
        }
        else{
            $zapytanie = mysqli_query($connect, "SELECT * FROM klienci LIMIT 15;");
            if(!$zapytanie){
                mysqli_close();
                echo "Blad w zapytaniu <br>";
                ?>
                </body>
                </html>
                <?php
                exit;
            }
            else
            {
                ?>
                <table id = "tab1">
                    <tr>
                        <td>NR Klienta</td>
                        <td>Imie</td>
                        <td>Nazwisko</td>
                        <td>Miejscowość</td>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_row($zapytanie)){
                        echo "<tr>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "<td>$row[3]</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
                <?php
                mysqli_close($connect);
            }
        }
    ?>
</body>
</html>