<?php
    $results = [
        '01-01-2007' =>[
            [
                'titolo' => 'Ciao amici',
                'autore' => 'Carmelo Carmelis',
                'testo' => 'Sono veramente euforico',
            ],
            [
                'titolo' => 'Ciao amici belli x2',
                'autore' => 'Gianni Giannetto',
                'testo' => 'Sono veramente euforico',
            ],            
        ],
        '01-03-2007' =>[
            [
                'titolo' => 'Nuovo array',
                'autore' => 'Claudio De Claudis',
                'testo' => 'I love php',
            ],
            [
                'titolo' => 'Nuovo o usato',
                'autore' => 'Divertimento Assicurato',
                'testo' => 'Vieni in concessionaria',
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>
    <?php 
    foreach ($results as $key => $data) {
            echo '<ul>Data: ' . $key;
            foreach ($data as $result){
                echo '<li>' . $result['titolo'] . '<br>' . $result['autore'] . '<br>' . $result['testo'] . '</li>';
            }
            echo '</ul>';
    }
    ?>   
    <h1>Fatto!</h1>
</body>
</html>