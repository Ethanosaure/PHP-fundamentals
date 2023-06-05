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
// print_r($family);
$recipe = ['frites', 'sauter de poulet au chorizo', "durum", "o'tacos"];
// print_r($recipe);
$movies = ['the hobbit', 'matrix', 'berserk', 'interstellar'];
// print_r($movies[3]);
$me = array('firstname' => 'Ethan',
'lastname' => 'Dias Marques',
'age' => 25,
'season' => 'winter',
'soccer' => 'false',
'favorite_movies' => $movies);
// print_r($me);
?>
<br>
<!-- exercices 1 -->
<?php
$me['hobbies'] = ['sports', 'coding', 'video games', 'playing with my dog', 'see my friends'];
$mother = array('firstname' => 'Sabine',
'lastname' => 'Sabine',
'age' => 55,
'season' => 'summer',
'soccer' => 'false',
'favorite_movies' => ['something', 'something', 'something', 'something'],
'hobbies' => ['sleep', 'take sunbath', 'see family', 'gardening']);

$me['mother'] = $mother;

// echo '<pre>';
// print_r($me);
// echo '</pre>';

$print_me = count($me['hobbies']);
$print_mother = count($mother['hobbies']);
$total = $print_me + $print_mother;
print_r("$total total hobbies");



?>



</head>
<body>
    
</body>
</html>