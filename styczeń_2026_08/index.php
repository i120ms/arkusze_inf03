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
    <main></main>
    <section>
        <?php
        if($polaczenie){
            $zapytanie2="SELECT nazwa, plik FROM szczyty LIMIT 10;";
            $wynik2 = mysqli_query($polaczenie, $zapytanie2);
            while($wiersz = mysqli_fetch_row($wynik2)){
                echo '<img src="$wiersz[0]" alt="$wiersz[1]" class="miniatury">';
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
