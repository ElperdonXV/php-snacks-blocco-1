<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
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
    <style>
        .teachers{
            background-color: grey;
        }
        .pm{
            background-color: green;
        }
    </style>
</head>
<body>
    <?php
    foreach ($db as $key => $users) {
            echo '<div class="' . $key . '">' . '<h1>' . $key . ':' . '</h1>';
            foreach ($users as $user){
                echo '<h2>' . $user['name'] . ' ' . $user['lastname'] . '</h2>';
            }
            echo '</div>';
    }   
     ?>
</body>
</html>