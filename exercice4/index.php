<?php 
$number1 = 100;
$number2 = 80;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 1 exercice 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-secondary">

<div class="text-warning h1 text-center p-5">

    <?php
        function echoNumber($number1, $number2) {
            if ($number1 < 0 || is_string($number1)) {
                echo "Veuillez rentrer une donnée valide";
            } else if ($number2 < 0 || is_string($number2)) {
                echo "Veuillez rentrer une donnée valide";
            } else {
                if ($number1 > $number2) {
                    echo "Le premier nombre est plus grand";
                } else if ($number1 < $number2) {
                    echo "Le premier nombre est plus petit";
                } else {
                    echo "Les deux nombres sont identiques";
                }
            }
        }

echoNumber($number1, $number2);

?>

</div>

</body>
</html>