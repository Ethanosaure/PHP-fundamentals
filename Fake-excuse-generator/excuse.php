<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form>
    <label for="name" >What is your name ?</label>
    <input type="text" name="name" id="name"><br>
    <label for="gender">What are you?</label>
    <select name="gender">
    <option value="Man">Man</option>
    <option value="Woman">Woman<option>
    </select> <br>
    <label for="teacher">What's your teacher name ?</label>
    <input type="text" name="teacher" id="teacher"><br>
    <label for="reason">For which reason do you need an excuse?</label>
    <select name="reason">
        <option value="illness">illness</option>
        <option value="death">death of someone or something</option>
        <option value="important activity">important activity</option>
        <option value="other">other</option>
    </select> <br>
    <button type="submit" id="validation">validation</button><br>
</form>


<div>
    <?php 
    $date = Date('H:i');

    if(isset($_GET['name']) and isset($_GET['gender']) and isset($_GET['teacher']) and isset($_GET['reason'])){
  $name=$_GET['name'];
    $gender=$_GET['gender'];
    $teacher=$_GET['teacher'];
    $reason=$_GET['reason'];

    if ($gender == 'Man') {
        if($reason == 'illness') {
        echo "Sorry mr $teacher, my son $name is ill";
    } 
    else if ($reason == 'death'){
        echo "sorry mr $teacher, my son $name is dead";
    }
    else if ($reason == 'important activity'){
        echo "sorry mr $teacher, my son $name has more important things to do";
    }
    else if ($reason == 'other'){
        echo "sorry mr $teacher, my son $name don't wanna go to school";
    }
   }
        else if($gender =='Woman') {
                      if($reason == 'illness') {
        echo "Sorry mr $teacher, my girl $name is ill";
    } 
    else if ($reason == 'death'){
        echo "sorry mr $teacher, my girl $name is dead";
    }
    else if ($reason == 'important activity'){
        echo "sorry mr $teacher, my girl $name has more important things to do";
    }
    else if ($reason == 'other'){
        echo "sorry mr $teacher, my girl $name don't wanna go to school ";
    }
}
}

    
    
    
    
    
    
    
    
    
    
    ?>
 </div>

    
</body>
</html>