<?php 
    $number = 8;
    $text = "heures";
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
<body class="bg-secondary">

<div class="text-warning h1 text-center p-5">

<?php 

    function helloWorld($number, $text) {
        if ($number < 0 || is_string($number)) {
            echo "Veuillez rentrer une donnée valide";
        } else if ($text < 0 || is_numeric($text)) {
            echo "Veuillez rentrer une donnée valide";
        }else {
            echo 'J\'ai besoin de '.$number." ".$text .' de sommeil par nuit';
}
}
helloWorld($number, $text);

?>

</div>

</body>
</html>