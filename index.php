<?php
if(empty($_GET['name']) === false || empty($_GET['mail']) === false || empty($_GET['age']) === false){
        var_dump($_GET);
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];
        if (strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age)) {
            $esito = "Accesso riuscito";
        } else {
            $esito = "Accesso negato";
        }
    }
    else {
        $esito = "Non hai inserito nessun dato o i dati inseriti non sono corretti, riprova";
    }
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
    <?php echo $esito ?>
</body>
</html>

