<?php
$polaczenie = mysqli_connect("localhost", "root", "", "korona");
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korona gór polskich</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="kheader">
        <header id="naglowek1">
            <img src="logo.png" alt="Logo">
        </header>
        <header id="naglowek2">
            <h1>Korona Gór Polskich</h1>
        </header>
    </div>
    <main>
        <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $zapytanie3 = "SELECT szczyty.plik, szczyty.nazwa, szczyty.wysokosc, szczyty.pasmo, opis.opis FROM szczyty JOIN opis ON szczyty.id = opis.szczyty_id WHERE szczyty.id = 1;";
            $wynik3 = mysqli_query($polaczenie, $zapytanie3);
            while($wiersz = mysqli_fetch_assoc($wynik3)){
                echo "<img src='{$wiersz['plik']}' alt='{$wiersz['nazwa']}' class='duze'>";
                echo "<h2>{$wiersz['nazwa']}</h2>";
                echo "<h3>wysokość: {$wiersz['wysokosc']} m n.p.m.</h3>";
                echo "<h3>pasmo górskie: {$wiersz['pasmo']}</h3>";
                echo "<p>{$wiersz['opis']}</p>";
            }
        }
        ?>
    </main>
    <section>
        
    </section>
    <div id="kfooter">
        <header id="stopka1">
            <h3>Kontakt</h3>
            <ul>
                <li>Zadzwoń do nas: 111 222 333</li>
                <li><a href="mail:korona@gory.pl">Napisz do nas</a></li>
            </ul>
        </header>
        <header id="stopka2">
            <h3>&copy; Wykonane przez: PESEL ZDAJĄCEGO</h3>
        </header>
    </div>
</body>
<?php 
if($polaczenie)
mysqli_close($polaczenie);
?>
</html>