<?php

$county = [

    '02' => 'Aisne', 
    '59' => 'Nord', 
    '60' => 'Oise', 
    '62' => 'Pas de Calais',  
    '80' => 'Somme', 
];

array_push($county, "Marne");
// var_dump($county);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 1 exercice 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="bg-warning">

<div class="text-success text-center h1 p-5">

<?php
    foreach ($county as $key => $value) { ?>
    <p>
        <?=$value;?>
    </p>
    <?php
    }
?>

</div>

</body>
</html>