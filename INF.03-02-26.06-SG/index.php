<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wodospady</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h2>Łowcy wodospadów</h2>
    </header>
    <main>
        <aside>
            <?php
            $polaczenie = mysqli_connect("localhost", "root", "", "wodospady");
            $zapytanie1 = "SELECT idKontynent, nazwa FROM kontynenty;";
            $wynik1 = mysqli_query($polaczenie, $zapytanie1);
            while ($row = mysqli_fetch_row($wynik1)) {
                    echo "<a href=\"index.php?id=$row[0]\">$row[1]</a>";
                }
            ?>
        </aside>
        <section>
            <table>
                <tr>
                    <th>Identyfikator</th>
                    <th>Państwo</th>
                    <th>Nazwa wodospadu</th>
                    <th>Wysokość</th>
                </tr>
                 <?php
                    if (isset($_GET["id"])) {
                        $kontynent = $_GET["id"];
                    } else {
                        $kontynent = 6;
                    }
                    $zapytanie2 = "SELECT idObiekt, panstwo, nazwa, wartoscCechy FROM obiekty WHERE idRodzaj = 10 AND idKontynent = $continent;";
                    $wynik2 = mysqli_query($polaczenie, $zapytanie2);
                    while ($row = mysqli_fetch_row($wynik2)) {
                        echo "<tr>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "<td>$row[3]</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
            <h4>Wpisz osągnięcie do bazy</h4>
            <form method="post">
                <label for="wodospadx">identyfikator wodospadu</label>
                <input type="number" id="wodospadx" name="wodospadx">
                <label for="turystx">turysta</label>
                <select id="turystx" name="turystx">
                    <?php
                        $zapytanie3 = "SELECT idTurysta, nick FROM turysci;";
                        $result = mysqli_query($polaczenie, $zapytanie3);
                    ?>
                </select>
                <button type="submit">Wpisz</button>
            </form>
        </section>
    </main>
    <article>
        <h3>Wodospady w Polsce</h3>
        <img src="kamienczyk.jpg" alt="wodospad">
        <img src="siklawica.jpg" alt="wodospad">
        <img src="siklawa.jpg" alt="wodospad">
        <img src="wilczki.jpg" alt="wodospad">
    </article>
    <footer>
        <p>Autor: XXXXXXXXXXXXXXXXX</p>
    </footer>
</body>
</html>
