<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <form>
        <div class="span">
        <span>Excuse Generator</span>
</div>
    <label for="name" >What is your child's name ?</label><br>
    <input type="text" name="name" id="name"><br>
    <label for="gender">What are you?</label><br>
    <select name="gender">
    <option value="Boy">Boy</option>
    <option value="Girl">Girl</option>
    </select> <br>
    <label for="teacher">What's your teacher name ?</label> <br>
    <input type="text" name="teacher" id="teacher"> 
    <select name="teacher_gender">
        <option value="Man">Man</option>
        <option value="Woman">Woman</option>
</select>
    <label for="reason">For which reason do you need an excuse?</label><br>
    <select name="reason">
        <option value="illness">illness</option>
        <option value="death">death of someone or something</option>
        <option value="important activity">important activity</option>
        <option value="other">other</option>
    </select> <br>
    <div class='wrapper'>
    <button type="submit" id="validation">validation</button><br>
</div>
</form>



<div id="excuse_div">
    <?php 
    $date = date("l, \\t\\h\\e jS \\of F Y");


    if(isset($_GET['name']) and isset($_GET['gender']) and isset($_GET['teacher']) and isset($_GET['reason']) and isset($_GET["teacher_gender"])){
  $name=$_GET['name'];
    $gender=$_GET['gender'];
    $teacher=$_GET['teacher'];
    $reason=$_GET['reason'];
    $teacher_gender = $_GET['teacher_gender'];
    $mr_mrs = ($teacher_gender == "Man") ? "Mr" : "Mrs";
    $he_she = ($gender == "Boy") ? "he" : "she";
    $him_her = ($gender == "Boy") ? "him" : "her";
    $his_her = ($gender == "Boy") ? "his" : "her";
       $illnessJustifications = [
    "Dear $mr_mrs $teacher, today on $date, I regret to inform you that my child $name is unable to attend school today due to $his_her illness. $he_she has been experiencing specific symptoms and is under medical care. I kindly request that $his_her absence be marked accordingly. Thank you for your understanding and support.",
    "Dear $mr_mrs $teacher, today on $date, I hope this message finds you well. Unfortunately, my child $name is feeling unwell today and will not be able to attend school. $he_she has been running a high temperature and experiencing specific symptoms. We have consulted a doctor, and they advised $him_her to rest and recover at home. Please mark $his_her absence as due to illness. Thank you for your understanding.",
    "Dear $mr_mrs $teacher, today on $date, I am writing to inform you that my child $name won't be able to come to school today as $he_she is feeling under the weather. $he_she has been experiencing specific symptoms since yesterday evening. We have made an appointment with our pediatrician, and I will provide a medical certificate upon $he_she return. Kindly mark $his_her absence as due to illness. Thank you for your cooperation.",
    "Dear $mr_mrs $teacher, today on $date, I wanted to let you know that my child $name won't be able to attend school today. $he_she woke up this morning with specific symptoms, and it is best for $him_her to stay home and rest. We have scheduled an appointment with our family doctor to get $his_her condition assessed. Please mark $his_her absence as due to illness. Thank you for your understanding.",
    "Dear $mr_mrs $teacher, today on $date, I am writing to inform you that my child $name will not be able to come to school today due to $his_her illness. $he_she has been experiencing specific symptoms since yesterday evening, and we believe it's necessary for $him_her to take a day off to recuperate. We will provide a medical certificate as soon as $he_she is able to visit the doctor. Please mark $his_her absence as due to illness. Thank you for your consideration."
];
$deathJustifications = [
    "Dear $mr_mrs $teacher, today on $date, I am deeply saddened to inform you that there has been a death in our family. My child child $name will not be able to attend school for the next few days as we mourn the loss of a loved one. We kindly request that $his_her absence be excused during this difficult time. Thank you for your understanding and support.",
    "Dear $mr_mrs $teacher, today on $date, It is with great sadness that I write to inform you about the passing of a beloved family member. As a result, my child $name will be absent from school for the next few days to attend the funeral and be with family during this challenging period. Please mark $his_her absence as due to a death in the family. Thank you for your compassion and consideration.",
    "Dear $mr_mrs $teacher, today on $date, I hope this message finds you well. Unfortunately, my child $name will not be able to attend school due to a recent loss. Our family pet passed away yesterday, and it has been quite distressing for $him_her. We feel it is important to give $him_her time to grieve and process the loss. Please mark $his_her absence as due to the death of our pet. Thank you for your understanding.",
    "Dear $mr_mrs $teacher, today on $date, I am writing to inform you that my child $name will not be present in school for the next few days due to a bereavement in our family. We have experienced the loss of a close family member, and it is essential for $name to be with the family during this challenging time. Kindly excuse $his_her absence and provide any necessary assignments or materials for he/she to catch up on. Thank you for your support.",
    "Dear $mr_mrs $teacher, today on $date, I regret to inform you that my child $name will not be able to come to school due to the recent loss of a dear friend. $he_she is deeply affected by this tragedy, and it is important for $him_her to have time to cope with the emotional impact. Please mark $his_her absence as due to the death of a friend. We appreciate your understanding and support during this difficult time."
];
$activityJustifications = [
    "Dear $mr_mrs $teacher, today on $date, I am writing to inform you that my child $name will not be able to attend school tomorrow due to a significant extra-curricular activity. $he_she has been selected to represent the school in a regional debate competition. This event requires $his_her presence throughout the day. We kindly request that $his_her absence be excused for this important opportunity. Thank you for your understanding and support.",
    "Dear $mr_mrs $teacher, today on $date, I hope this message finds you well. I wanted to inform you that my child $name has a significant extra-curricular activity tomorrow. $he_she has been chosen as a soloist in the school choir and will be performing at a prestigious music festival. This is an incredible opportunity for $him_her, and we kindly request that $his_her absence be marked as an excused absence. Thank you for your support.",
    "Dear $mr_mrs $teacher, today on $date, I am writing to inform you that my child $name will not be able to attend school on $date due to a significant extra-curricular activity. $he_she is a member of the school's robotics team, and they have advanced to the finals of a statewide competition. $his_her participation and dedication to this activity have been exceptional, and we kindly request that $his_her absence be considered excused. Thank you for your understanding.",
    "Dear $mr_mrs $teacher, today on $date, I wanted to let you know that my child $name will not be attending school on $date due to a significant extra-curricular activity. $he_she is a talented athlete and has been selected to participate in a regional gymnastics tournament. This competition is a valuable opportunity for $his_her growth and development in the sport. We kindly request that $his_her absence be excused for this event. Thank you for your support.",
    "Dear $mr_mrs $teacher, today on $date, I am writing to inform you that my child $name will be absent from school on $date due to a significant extra-curricular activity. $he_she is a member of the school's drama club and has been cast in a leading role in the annual theater production. The rehearsals for this performance require $his_her presence throughout the day. We kindly request that $his_her absence be marked as an excused absence. Thank you for your understanding and encouragement."
];
$otherJustifications = [
    "Dear $mr_mrs $teacher, today on $date, I am writing to inform you that my child $name will not be able to attend school tomorrow due to an important family event. We have a family reunion planned, and it is essential for $him_her to be present and spend time with extended family members. We kindly request that $his_her absence be excused for this special occasion. Thank you for your understanding and support.",
    "Dear $mr_mrs $teacher, today on $date, I hope this message finds you well. I wanted to inform you that my child $name will not be attending school on $date due to a medical appointment. he/she has been experiencing some health concerns, and it is necessary for $him_her to undergo a diagnostic procedure. We kindly request that $his_her absence be considered excused. Thank you for your support.",
    "Dear $mr_mrs $teacher, today on $date, I am writing to inform you that my child $name will not be able to attend school on $date due to a planned educational trip. $he_she has been given the opportunity to participate in a field trip organized by [organization]. This trip will provide valuable learning experiences outside of the classroom, and we kindly request that $his_her absence be marked as an excused absence. Thank you for your understanding.",
    "Dear $mr_mrs $teacher, today on $date, I wanted to let you know that my child $name will not be attending school on $date due to a religious observance. Our family will be observing an important religious holiday, and it is important for $him_her to be present for the rituals and celebrations. We kindly request that $his_her absence be excused for this religious observance. Thank you for your support.",
    "Dear $mr_mrs $teacher, today on $date, I am writing to inform you that my child $name will be absent from school on $date due to a personal appointment. $he_she has an appointment with a specialist regarding a specific matter that requires immediate attention. We kindly request that $his_her absence be marked as an excused absence. Thank you for your understanding and cooperation."
];

        if($reason == 'illness') {
        shuffle($illnessJustifications);
        echo "$illnessJustifications[0]";
    } 
    else if ($reason == 'death'){
       shuffle($deathJustifications);
        echo "$deathJustifications[0]";
    }
    else if ($reason == 'important activity'){
        shuffle($activityJustifications);
        echo "$activityJustifications[0]";
    }
    else if ($reason == 'other'){
        shuffle($otherJustifications);
        echo "$otherJustifications[0]";
    }
}

    
    
    
    
    
    
    
    
    
    
    ?>
 </div>

    
</body>
</html>