<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 1 exercice 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-success">

<div class="text-warning h1 text-center p-5">

<?php 
    function resultThreeNumber($number1 = 253, $number2 = 5454, $number3 = 858) {
        $result = $number1 + $number2 + $number3;
        return $result;
    }

    echo resultThreeNumber();
?>
</div>
</body>
</html>