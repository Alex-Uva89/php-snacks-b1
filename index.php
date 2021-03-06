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

            $tappa_calendario = [
                    [
                        'casa' => [
                        'squadra' => 'Torino',
                        'punteggio' => rand('0','100')
                        ],
                        'ospite' => [
                            'squadra' => 'Milano',
                            'punteggio' => rand('0','100')
                        ]
                    ],
                    [
                        'casa' => [
                            'squadra' => 'Roma',
                            'punteggio' => rand('0','100')
                        ],
                        'ospite' => [
                            'squadra' => 'Lazio',
                            'punteggio' => rand('0','100')
                        ],
                    ],
                    [
                        'casa' => [
                            'squadra' => 'Agrigento',
                            'punteggio' => rand('0','100')
                        ],
                        'ospite' => [
                            'squadra' => 'Bari',
                            'punteggio' => rand('0','100')
                        ],
                    ],
                    [
                        'casa' => [
                            'squadra' => 'Parma',
                            'punteggio' => rand('0','100')
                        ],
                        'ospite' => [
                            'squadra' => 'Genova',
                            'punteggio' => rand('0','100')
                        ],
                    ],
                    [
                        'casa' => [
                            'squadra' => 'Venezia',
                            'punteggio' => rand('0','100')
                        ],
                        'ospite' => [
                            'squadra' => 'Palermo',
                            'punteggio' => rand('0','100')
                        ],
                    ],
                    [
                        'casa' => [
                            'squadra' => 'Cagliari',
                            'punteggio' => rand('0','100')
                        ],
                        'ospite' => [
                            'squadra' => 'Matera',
                            'punteggio' => rand('0','100')
                        ],
                    ],
                    [
                        'casa' => [
                            'squadra' => 'Cuneo',
                            'punteggio' => rand('0','100'),
                        ],
                        'ospite' => [
                            'squadra' => 'Napoli',
                            'punteggio' => rand('0','100')
                        ],
                    ],
                    [
                        'casa' => [
                            'squadra' => 'Lecce',
                            'punteggio' => rand('0','100')
                        ],
                        'ospite' => [
                            'squadra' => 'Firenze',
                            'punteggio' => rand('0','100')
                        ],
                    ],
            ];
            
            
        ?>
        <h1 class="titolo_principale">Esercizi Snack</h1>
        <h2 class="snack_title">snack 1:</h2>
        <p>Consegna: 'Creiamo un array contenente le partite di basket di un???ipotetica tappa del calendario. Ogni array avr?? una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cant?? | 55-60'</p>
        <div class="container_risultato">
            <div>Risultato:</div>
                    
            <ul>
                <?php
                    for ($i=0; $i < count($tappa_calendario) ; $i++) { ?>
                        <li class="item">
                            <span class="item-dx"><?= $tappa_calendario[$i]['casa']['squadra'] ?></span>
                            <span> - </span>
                            <span class="item-sx"><?= $tappa_calendario[$i]['ospite']['squadra'] ?></span>
                            <span class="separatore"> | </span>
                            <span class="item-dx"><?= $tappa_calendario[$i]['casa']['punteggio'] ?></span>
                            <span> - </span>
                            <span class="item-sx"><?= $tappa_calendario[$i]['ospite']['punteggio'] ?></span>
                        </li><?php
                    }?>
            </ul>
        </div>
        
                <!-- ||||||||||||||||||SNACK 2|||||||||||||||||| -->
        
        <?php
        $name_input = $_REQUEST['name'];
        $mail_input = $_REQUEST['mail'];
        $age_input = $_REQUEST['age'];
        ?>
        
        <h2 class="snack_title">snack 2:</h2>
        <p>Consegna: 'Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia pi?? lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto ?? ok stampare ???Accesso riuscito???, altrimenti ???Accesso negato???'</p>
        <div class="container_risultato">
            <div>Risultato:</div>
            <form action="" class="form_container">
                <label for="name">Inserisci il tuo nome:</label>
                <input type="text" name="name" id="name" method="get">
                <label for="mail">Inserisci la tua mail:</label>
                <input type="text" name="mail" id="mail" method="get">
                <label for="age">Inserisci la tua et??:</label>
                <input type="text" name="age" id="age" method="get">
                <button>Verifica</button>
            </form>
            <small class="attention">ATTENZIONE: il nome deve contenere almeno 3 caratteri, la mail deve contenere una @ e un . e l'et?? deve essere un valore numerico.</small>
            <?php
                $lunghezza_name = strlen($name_input); 
                $is_number = is_numeric($age_input);
                $ther_is_snail = strpos($mail_input, '@', 1);
                $ther_is_point = strpos($mail_input, '.', $ther_is_snail);

                
                if ($lunghezza_name > 3 && $is_number) {
                    if ($ther_is_snail !== false && $ther_is_point !== false){
                        echo "<span class='right'>Accesso riuscito</span>";
                    } else {
                        echo "<span class='error'>Accesso negato</span>";
                    };
                } else {
                    echo "<span class='error'>Accesso negato</span>";
                }

            ?>
        </div>
                <!-- ||||||||||||||||||SNACK 3|||||||||||||||||| -->


            <h2 class="snack_title">snack 3:</h2>
            <p>Consegna: 'Creare un array con 15 numeri casuali, tenendo conto che l???array non dovr?? contenere lo stesso numero pi?? di una volta'</p>
            <div class="container_risultato">
            <div>Risultato:</div>
            <div class="random_number">
                <?php
                $array_numeri_casuali = [];
                
                while (count($array_numeri_casuali) < 15){
                    $generatore_numero_random = rand(0,100);
                    if (!in_array($generatore_numero_random, $array_numeri_casuali)) {
                        $array_numeri_casuali[] = $generatore_numero_random;
                    }
                    
                }
                echo implode(' - ', $array_numeri_casuali)
                ?>
            </div>
        </div>


                <!-- ||||||||||||||||||SNACK 4|||||||||||||||||| -->
        
        
                <h2 class="snack_title">snack 4:</h2>
        <p> 
            Consegna: 
            'Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.'
        </p>
        <div class="container_risultato">
            <div>Risultato:</div>
            <p>
                testo originale: "Goditi potere e bellezza della tua giovent??.
                Non ci pensare.
                Il potere di bellezza e giovent?? lo capirai solo una volta appassite.
                Ma credimi tra vent???anni guarderai quelle tue vecchie foto.
                E in un modo che non puoi immaginare adesso.
                Quante possibilit?? avevi di fronte e che aspetto magnifico avevi!
                Non eri per niente grasso come ti sembrava.
                Non preoccuparti del futuro.
                Oppure preoccupati, ma sapendo che questo ti aiuta quanto masticare un chewing-gum per risolvere un???equazione algebrica.
                I veri problemi della vita saranno sicuramente cose che non t???erano mai passate per la mente.
                Di quelle che ti pigliano di sorpresa alle quattro di un pigro marted?? pomeriggio.
                Fa??? una cosa, ogni giorno che sei spaventato.
                Canta.
                Non esser crudele col cuore degli altri.
                Non tollerare la gente che ?? crudele col tuo.
                Lavati i denti.
                Non perder tempo con l???invidia.
                A volte sei in testa.
                A volte resti indietro.
                La corsa ?? lunga e alla fine ?? solo con te stesso.
                Ricorda i complimenti che ricevi, scordati gli insulti.
                Se ci riesci veramente dimmi come si fa.
                Conserva tutte le vecchie lettere d???amore, butta i vecchi estratti conto.
                Rilassati.
                Non sentirti in colpa se non sai cosa vuoi fare della tua vita.
                Le persone pi?? interessanti che conosco, a ventidue anni non sapevano che fare della loro vita.
                I quarantenni pi?? interessanti che conosco ancora non lo sanno.
                Prendi molto calcio.
                Sii gentile con le tue ginocchia, quando saranno partite ti mancheranno.
                Forse ti sposerai o forse no.
                Forse avrai figli o forse no.
                Forse divorzierai a quarant???anni.
                Forse ballerai con lei al settantacinquesimo anniversario di matrimonio.
                Comunque vada, non congratularti troppo con te stesso, ma non rimproverarti neanche.
                Le tue scelte sono scommesse.
                Come quelle di chiunque altro.
                Goditi il tuo corpo.
                Usalo in tutti i modi che puoi.
                Senza paura e senza temere quel che pensa la gente.
                ?? il pi?? grande strumento che potrai mai avere.
                Balla.
                Anche se il solo posto che hai per farlo ?? il tuo soggiorno.
                Leggi le istruzioni, anche se poi non le seguirai.
                Non leggere le riviste di bellezza.
                Ti faranno solo sentire orrendo.
                Cerca di conoscere i tuoi genitori.
                Non puoi sapere quando se ne andranno per sempre.
                Tratta bene i tuoi fratelli.
                Sono il migliore legame con il passato e quelli che pi?? probabilmente avranno cura di te in futuro.
                Renditi conto che gli amici vanno e vengono.
                Ma alcuni, i pi?? preziosi, rimarranno.
                Datti da fare per colmare le distanze geografiche e di stili di vita, perch?? pi?? diventi vecchio, pi?? hai bisogno delle persone che conoscevi da giovane.
                Vivi a New York per un po???, ma lasciala prima che ti indurisca.
                Vivi anche in California per un po???, ma lasciala prima che ti rammollisca.
                Non fare pasticci coi capelli, se no quando avrai quarant???anni sembreranno di un ottantacinquenne.
                Sii cauto nell???accettare consigli, ma sii paziente con chi li dispensa.
                I consigli sono una forma di nostalgia. Dispensarli ?? un modo di ripescare il passato dal dimenticatoio, ripulirlo, passare la vernice sulle parti pi?? brutte e riciclarlo per pi?? di quel che valga.
                Ma accetta il consiglio??? per questa volta"
            </p>
            <?php
               $testo_originale = 'Goditi potere e bellezza della tua giovent??.
               Non ci pensare.
               Il potere di bellezza e giovent?? lo capirai solo una volta appassite.
               Ma credimi tra vent???anni guarderai quelle tue vecchie foto.
               E in un modo che non puoi immaginare adesso.
               Quante possibilit?? avevi di fronte e che aspetto magnifico avevi!
               Non eri per niente grasso come ti sembrava.
               Non preoccuparti del futuro.
               Oppure preoccupati, ma sapendo che questo ti aiuta quanto masticare un chewing-gum per risolvere un???equazione algebrica.
               I veri problemi della vita saranno sicuramente cose che non t???erano mai passate per la mente.
               Di quelle che ti pigliano di sorpresa alle quattro di un pigro marted?? pomeriggio.
               Fa??? una cosa, ogni giorno che sei spaventato.
               Canta.
               Non esser crudele col cuore degli altri.
               Non tollerare la gente che ?? crudele col tuo.
               Lavati i denti.
               Non perder tempo con l???invidia.
               A volte sei in testa.
               A volte resti indietro.
               La corsa ?? lunga e alla fine ?? solo con te stesso.
               Ricorda i complimenti che ricevi, scordati gli insulti.
               Se ci riesci veramente dimmi come si fa.
               Conserva tutte le vecchie lettere d???amore, butta i vecchi estratti conto.
               Rilassati.
               Non sentirti in colpa se non sai cosa vuoi fare della tua vita.
               Le persone pi?? interessanti che conosco, a ventidue anni non sapevano che fare della loro vita.
               I quarantenni pi?? interessanti che conosco ancora non lo sanno.
               Prendi molto calcio.
               Sii gentile con le tue ginocchia, quando saranno partite ti mancheranno.
               Forse ti sposerai o forse no.
               Forse avrai figli o forse no.
               Forse divorzierai a quarant???anni.
               Forse ballerai con lei al settantacinquesimo anniversario di matrimonio.
               Comunque vada, non congratularti troppo con te stesso, ma non rimproverarti neanche.
               Le tue scelte sono scommesse.
               Come quelle di chiunque altro.
               Goditi il tuo corpo.
               Usalo in tutti i modi che puoi.
               Senza paura e senza temere quel che pensa la gente.
               ?? il pi?? grande strumento che potrai mai avere.
               Balla.
               Anche se il solo posto che hai per farlo ?? il tuo soggiorno.
               Leggi le istruzioni, anche se poi non le seguirai.
               Non leggere le riviste di bellezza.
               Ti faranno solo sentire orrendo.
               Cerca di conoscere i tuoi genitori.
               Non puoi sapere quando se ne andranno per sempre.
               Tratta bene i tuoi fratelli.
               Sono il migliore legame con il passato e quelli che pi?? probabilmente avranno cura di te in futuro.
               Renditi conto che gli amici vanno e vengono.
               Ma alcuni, i pi?? preziosi, rimarranno.
               Datti da fare per colmare le distanze geografiche e di stili di vita, perch?? pi?? diventi vecchio, pi?? hai bisogno delle persone che conoscevi da giovane.
               Vivi a New York per un po???, ma lasciala prima che ti indurisca.
               Vivi anche in California per un po???, ma lasciala prima che ti rammollisca.
               Non fare pasticci coi capelli, se no quando avrai quarant???anni sembreranno di un ottantacinquenne.
               Sii cauto nell???accettare consigli, ma sii paziente con chi li dispensa.
               I consigli sono una forma di nostalgia. Dispensarli ?? un modo di ripescare il passato dal dimenticatoio, ripulirlo, passare la vernice sulle parti pi?? brutte e riciclarlo per pi?? di quel che valga.
               Ma accetta il consiglio??? per questa volta';
            $testo_trasformato_in_frasi = explode('.', $testo_originale);
            ?>
            <div class="paragrafo">Testo Aggiustato:</div>
            <?php
            for ($frase=0; $frase < count($testo_trasformato_in_frasi); $frase++) { 
                  echo "<p class='frase'>".$testo_trasformato_in_frasi[$frase].".</p>";
            };
               
            ?>
    </div>

</body>
</html>