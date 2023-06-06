<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- exemple exercices -->
<?php
$arrays = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";
$arrays = explode (" ", $arrays);
foreach($arrays as $array){
    // echo str_shuffle($array)." ";
}
?>

<!-- exercices -->
<?php
function capitalize($name) {
    echo ucfirst("$name<br>");
    echo date("d M y ");
}
capitalize('gaston');

function sum($num1, $num2) {
    if (!is_numeric($num1 ) || !is_numeric($num2)){
        echo "error, argument not valid";
        return null;
    }
    $result =  $num1 + $num2;
    echo $result;
    return $result;
}

sum(8, 3);



?>



</body>
</html>