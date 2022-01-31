<?php
   $paragrafo = "Sai, la Pietra non era poi una cosa tanto prodigiosa. Sì, certo: tutti i soldi e tutta la vita che uno può volere... 
   Sono le due cose che la maggior parte degli esseri umani desidera più di ogni altra... Ma il guaio è che gli uomini hanno una particolare abilità nello scegliere proprio 
   le cose peggiori per loro.";
    $explode = explode(". ", $paragrafo);
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
    foreach($explode as $newpar){
        echo '<div>' . $newpar . '</div>';
    }
     ?>
    <h1>Fatto!</h1>
</body>
</html>