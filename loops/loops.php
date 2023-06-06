<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- exercice exemple loops -->
<?php
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach($pronouns as $pronoun){
    // echo "$pronoun code <br>";
}
?>
<!-- exercices -->
<?php
$number = 1;
while($number <=100 ) {
    // echo "$number <br>";
    $number++;
}
for ($numbers = 1; $numbers <=100; $numbers ++){
    // echo "$numbers<br>";
}


$becode_people = ['sylvain', 'bruno', 'anthony', 'loic', 'willy', 'emilien', 'delphine', 'abel'];
foreach($becode_people as $becode_person){
    // echo "$becode_person<br>";
}



?>
<select>
<?php
$countries = ["BE" =>'Belgium', "DE" =>'Germany', "FR" =>'France', "GB" =>'United-Kingdom', "PT" =>"Portugal", "ES" => "Spain", "NO" =>"norway", "RU" =>"Russia", "US"=>"united-states", "CA" =>"canada"];
foreach($countries as $key => $value) {
    echo "<option value=$key>$value</option>";
}
?>



</select>





</body>
</html>