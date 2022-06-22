<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema => Olimpia Milano - Cantù | 55-60 -->

<?php
    // Creo un array contenente le partite di basket
    $basketMatches = [
        // Ogni array contiene una squadra di casa e una ospite e i rispettivi punteggi
        [
            'homeTeam' => 'Lakers',
            'hostTeam' => 'Boston Celtics',
            'homeTeamPoints' => 80,
            'hostTeamPoints' => 44,
        ],
        [
            'homeTeam' => 'Miami Heat',
            'hostTeam' => 'Chicago Bulls',
            'homeTeamPoints' => 90,
            'hostTeamPoints' => 102,
        ],
        [
            'homeTeam' => 'Knicks',
            'hostTeam' => 'Huston Rockets',
            'homeTeamPoints' => 36,
            'hostTeamPoints' => 28,
        ],
        [
            'homeTeam' => 'Dallas',
            'hostTeam' => 'Memphis',
            'homeTeamPoints' => 58,
            'hostTeamPoints' => 76,
        ],
        [
            'homeTeam' => 'Toronto Raptors',
            'hostTeam' => 'Phoenix Suns',
            'homeTeamPoints' => 110,
            'hostTeamPoints' => 122,
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 1</title>
    </head>
    <body>
        <!-- Stampo in html tutte le partite con questo schema => homeTeam - hostTeam | homeTeamPoints-hostTeamPoints -->
        <h1>Basketball Matches</h1>
        <ul>
            <?php
                for($i = 0; $i < count($basketMatches); $i++) {
                    echo "<li>{$basketMatches[$i]['homeTeam']} - {$basketMatches[$i]['hostTeam']} | {$basketMatches[$i]['homeTeamPoints']}-{$basketMatches[$i]['hostTeamPoints']}</li>";
                }
            ?>
        </ul>
    </body>
</html>