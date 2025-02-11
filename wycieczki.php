<!DOCTYPE html>
<html lang="pl_PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki i urlopy</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <section id='all'>
    <header>
    <h1>BIURO PODRÓŻY</h1>
    </header>
    <section id='nawigacja'>
        <section id="lewy">
            <h2>KONTAKT</h2>
            <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
            <p>telefon: 555666777</p>
        </section>
        <section id="srodkowy">
            <h2>GALERIA</h2>

        <?php

        $PDO = new PDO('mysql:host=localhost;dbname=egzamin3;charset=utf8mb4;port=3306', 'root', '');

        $stmt = $PDO->prepare('SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC;');

        $stmt->execute();

        foreach($stmt as $row){

            echo '<img src="' . $row['nazwaPliku'] . '" alt="' . $row['podpis'] . '">';

        }

        ?>

        </section>
        <section id="prawy">
            <h2>PROMOCJE</h2>
            <table>
                <tr><td>Jesień</td><td>Grupa 4+</td><td>Grupa 10+</td></tr>
                <tr><td>5%</td><td>10%</td><td>15%</td></tr>
            </table>
        </section>
    </section>
    <section id="dane">
        <h2>LISTA WYCIECZEK</h2>

<?php

$PDO = new PDO('mysql:host=localhost;dbname=egzamin3;charset=utf8mb4;port=3306', 'root', '');

$stmt = $PDO->prepare('SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1;');

$stmt->execute();

foreach($stmt as $row){

    echo $row['id'] . '. '
    . $row['dataWyjazdu'] . ', '
    . $row['cel'] . ', '
    . 'cena: ' . $row['cena'] . '<br>';

}

?>

    </section>
    <footer>
        <p>Stronę wykonał: Nikodem Warmowski</p>
    </footer>

    </section>
</body>
</html>