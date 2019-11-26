<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Partie2PHP</title>
</head>
<body>
<?php
$age = 12;
     if ($age >= 18) { 
         echo ('Vous êtes majeur');
     } 
     else { echo 
         ('Tu es un bézo');
     }
?>
<hr>
<?php
$age = 18;
$gender = 'Homme';
if ($age >=18 && $gender == 'Homme') {
    echo ('Vous êtes un homme majeur');
}
elseif ($age <18 & $gender == 'Homme') {
    echo ('Vous êtes un homme mineur');
}
elseif ($age >=18 && $gender == 'Femme' ) {
echo ('Vous êtes une femme majeure');
}
else {
    echo ('Vous êtes une femme mineure');
    }
?>
<hr>
<?php
 $gender = 'Homme';
 if ($gender) {
    echo ('C\'est un developpeur !!!');
 } else {
echo ('C\'est une developpeuse !!!');
 }
?>
<hr>
<?php
$age = 18;
if ($age >= 18) {
echo ('Tu es majeur');
} else {
echo ('Tu n\'es pas majeur');
}
?>
</body>
</html>