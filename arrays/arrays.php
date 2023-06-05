<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- exercice exemple-->
<?php
$family = ['papa', 'maman', 'ptite soeur', 'grande soeur', 'grand frère'];
print_r($family);
$recipe = ['frites', 'sauter de poulet au chorizo', "durum", "o'tacos"];
print_r($recipe);
$movies = ['the hobbit', 'matrix', 'berserk', 'interstellar'];
print_r($movies[3]);
?>
<!-- exercice 1 -->
<?php
$me = array('firstname' => 'Ethan',
'lastname' => 'Dias Marques',
'age' => 25,
'season' => 'winter',
'soccer' => 'false',
'favorite_movies' => $movies);
print_r($me);




?>



</head>
<body>
    
</body>
</html>