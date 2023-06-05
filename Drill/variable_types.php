<!DOCTYPE html>
<html>
<head><title>variable type</title>
</head>
<body>
<?php $first_name = "Ethan";
$age = 25; 
$eye_color= "green";
$hungry = true ;

?>
<?php $family = array( 0 => 'Papa',
1=> "Maman",
2=> "ptite soeur",
3=> "grande soeur",
4=> "grand frère"); ?>
<p> <?php  echo "Hi! My name is $first_name";?></p>
<p> <?php echo "I am $age years old"; ?></p>
<p><?php echo "My eyes are $eye_color"; ?></p>  
<p><?php echo "The first person in my family is $family[0]"    ?></p>  
<p><?php echo "Am I hungry ? $hungry" ?></p>

</body>
</html>