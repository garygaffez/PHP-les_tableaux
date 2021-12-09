<?php
    $age;     
    $gender = "";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 1 exercice 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-dark">

<div class="text-warning h1 text-center p-5">

<?php 
    function ageGender($age, $gender) {        
        $result1 = "Vous êtes un homme et vous êtes majeur";
        $result2 = "Vous êtes un homme et vous êtes mineur";
        $result3 = "Vous êtes une femme et vous êtes majeure";
        $result4 = "Vous êtes une femme et vous êtes mineure";
        if ( $age >= 18 && $gender == "Homme") {
            return $result1;
        } else if ( $age < 18 && $gender == "Homme") {
            return $result2;
        } else if ( $age >= 18 && $gender == "Femme") {
            return $result3;
        } else if ( $age < 18 && $gender == "Femme") {
            return $result4;
        } else {
            
        }
        
    }

    echo ageGender(17, "Femme");
?>
</div>
</body>
</html>