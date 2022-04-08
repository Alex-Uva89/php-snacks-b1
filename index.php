<?php
/*
Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack PHP</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
            $punteggio_random_casa = rand('0','100');
            $punteggio_random_opite = rand('0','100');

            $tappa_calendario = [
                'squadra' => [
                    'casa' => 'blu',
                    'ospite' => 'verde'
                ],
                'punteggio' => [
                    'casa' => $punteggio_random_casa,
                    'ospite' => $punteggio_random_opite
                ]
                ];
            $squadra_casa = $tappa_calendario['squadra']['casa'];
            $punteggio_casa = $tappa_calendario['punteggio']['casa'];
            $squadra_ospite = $tappa_calendario['squadra']['ospite'];
            $punteggio_ospite = $tappa_calendario['punteggio']['ospite'];
            
        ?>
        <h1 class="titolo_principale">Esercizi Snack</h1>
        <h2 class="snack_title">snack 1:</h2>
        <p>Consegna: 'Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60'</p>
        <div class="container_risultato">
            <div>Risultato:</div>
                    
            <?php
                echo "<div>$squadra_casa - $squadra_ospite : $punteggio_casa - $punteggio_ospite</div>";
            ?>
        </div>
        
                <!-- ||||||||||||||||||SNACK 2|||||||||||||||||| -->
        
        <?php
        $name_input = $_REQUEST['name'];
        $mail_input = $_REQUEST['mail'];
        $age_input = $_REQUEST['age'];
        ?>
        
        <h2 class="snack_title">snack 2:</h2>
        <p>Consegna: 'Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”'</p>
        <div class="container_risultato">
            <div>Risultato:</div>
            <form action="" class="form_container">
                <label for="name">Inserisci il tuo nome:</label>
                <input type="text" name="name" id="name" method="get">
                <label for="mail">Inserisci la tua mail:</label>
                <input type="text" name="mail" id="mail" method="get">
                <label for="age">Inserisci la tua età:</label>
                <input type="text" name="age" id="age" method="get">
                <input type="submit" value="Verifica">
            </form>
            <?php
                // if ($name_input) {
                //     # code...
                // }

                echo strlen($name_input);
            ?>
        </div>
        
    </div>

</body>
</html>