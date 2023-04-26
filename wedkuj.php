<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl_1.css">
    <title>Wędkowanie</title>
</head>
<body>
    
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>

    <aside class="lewy1">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
<?php
$con = mysqli_connect('localhost', 'root','','wedkowanie');
$q1 = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM 
ryby INNER JOIN lowisko ON ryb.id = lowisko.Ryby_id WHERE lowisko.rodzaj = 3;";
$res1 = mysqli_query($con, $q1);
while ($row = mysqli_fetch_array($res1)) {
    echo "<li>$row[0] pływa w rzece $row[1], $row[2]</li>";
} 
?>
        </ol>
    </aside>

    <nav class="prawy">
        <img src="ryba1.jpg" alt="Sum">
        <p><a href="kwerendy.txt">Pobierz kwerendy</a></p>
    </nav>

    <main class="lewy2">
        <h3>Ryby drapieżne naszych wód</h3>
    </main>

    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>

</body>
</html>