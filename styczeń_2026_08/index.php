<?php
$polaczenie = mysqli_connect("localhost", "root", "", "korona");
mysqli_set_charset($polaczenie, "utf8");
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
            $zapytanie1 = "SELECT id, nazwa FROM szczyty ORDER BY wysokosc DESC;";
            $wynik1 = mysqli_query($polaczenie, $zapytanie1);
            while($wiersz = mysqli_fetch_assoc($wynik1)){
                echo "<span><a href='szczyty.php?id={$wiersz['id']}'>{$wiersz['nazwa']}</a></span> ";
            }
        ?>
    </main>
    <section>
        <?php
        if($polaczenie){
            $zapytanie2 = "SELECT nazwa, plik FROM szczyty LIMIT 10;";
            $wynik2 = mysqli_query($polaczenie, $zapytanie2);
            while($wiersz = mysqli_fetch_row($wynik2)){
                echo "<img src='$wiersz[1]' alt='$wiersz[0]' class='miniatury'>";
            }
        }
        ?>
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