<?php 
    $lastName = "Gaffez";
    $firstName = "Gary";
    $age = 37;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 1 exercice 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-dark">

<div class="text-warning h1 text-center p-5">

<?php 
    function threeParametres($lastName, $firstName, $age) {
        if ($age < 0 || $age > 120 || is_string($age)) {
            echo "$age n'est pas autorisé, veuillez rentrer une donnée valide";
        } else if (is_numeric($lastName)) {
            echo "Veuillez rentrer une donnée valide";
        } else if (is_numeric($firstName)) {
            echo "Veuillez rentrer une donnée valide";
        } else {
            echo 'Bonjour ' .$firstName. ' ' .$lastName. ', tu as '.$age. ' ans';
        }
    }   

    threeParametres($lastName, $firstName, $age);
?>

</div>
</body>
</html>