<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>
<body>
    <?php include_once __DIR__ . '/server/db.php' ?>
    <form action="search.php">
      <select name="type" id="type">
        <option value="all">all</option>
        <option value="object">object</option>
        <option value="carne">carne</option>
        <option value="frutta">frutta</option>
        <option value="bevanda">bevanda</option>
      </select>
      <button>Cerca</button>
    </form>
    <?php
        foreach($products as $product){
            echo '<h1>'. $product['name'] . '</h1>';
            echo '<h2>' . $product['price'] . '€' . '</h2>';
            echo '<img src="' . $product['img'] . '"' . 'alt="'. $product['name']. '">';
        };
    ?>
</body>
</html>