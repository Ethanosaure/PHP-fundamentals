<?php 
// 1.1 Clean your room Exercise 
$possible_states = array (
    0=> "health hazard",
    1=> "filthy",
    2=> "dirty",
    3=> "clean",
    4=> "immaculate"
);
$room_filthiness = $possible_states[2];
$room_is_filthy = true;

if( $room_filthiness == 'health hazard' ){
	echo "Yuk, Room is a real garbage : let's clean it up !";
	echo "<br>Room is now clean!";
	$room_is_filthy = $possible_states[4];
} else if ($room_filthiness == 'filthy') {
	echo "BEEEEUrk, this room is filthy";
    echo "<br> clean YOUR ROOM you dirty ass bitch";
    $room_filthiness = $possible_states[4];
} else if ($room_filthiness == 'dirty'){
    echo "it smells the chacal ici";
    echo "<br> use some desodorisant for the smell";
    $room_filthiness = $possible_states[4];
} else if ($room_filthiness == 'clean'){
    echo "that's quit clean here, that's nice";
} else if ($room_filthiness == 'immaculate'){
    echo "that's the beautifullest and cleanest room i've ever seen, bangrang me pls <3";
}

// $time = "2h00";
// $now = date('H:i');

// if ( $now > "5:00" AND $now < "9:00" ){
//     echo" <br>good morning ";
// } else if ($now > "9:01" AND $now < "12:00") {
//     echo "<br> good day";
// } else if ($now > "12:01" AND $now < "16:00") {
//     echo "<br>good afternoon";
// } else if ($now > "16:01" AND $now < "21:00") {
//     echo "<br>good evening";
// }  else if ($now > "21:01" AND $now < "4:59") {
//     echo "<br>good night";
// }


// $age = 0;


// if($age < 12){
//  echo '<br> Hello kiddo';
// } else if ( $age > 12 AND $age < 18){
// echo "<br> Hello Teenager";
// } else if ( $age > 18 AND $age < 115) {
//     echo "<br> Hello Adult";
// }else if ($age > 115){
//     echo "<br>Wow t ki ? ";
// }




?>
<html>

<body>
<form> 
    <label name="grade" id="grade">Write your grades</label>
    <input type="number" min="0" max ="20" id="grade" name="grade">
</form>

<?php   

    if (isset($_GET['grade'])){
        $grade = $_GET["grade"];

        if ($grade <= 4){
            echo 'This work is really bad. What a dumb kid!';
        }
        else if ($grade >=5 and $grade <= 9){
            echo 'This is not sufficient. More studying is required.';
        }
        else if ($grade == 10) {
            echo 'barely enough!';
        }
        else if ($grade >= 11 and $grade <=14) {
            echo 'Not bad!';
        }
        else if ($grade >=15 and $grade <=18) {
            echo 'Bravo, bravissimo!';
        }
        else if ($grade >= 19) {
            echo 'Too good to be true : confront the cheater!';
        }
    }





?>




<!-- <form method="get" action="conditions.php">
	<label for="age">Enter your age Human</label>
	<input type="number" name="age">
    <input type="radio" name="gender" value="man" id="man">
    <label for="man"> Man </label>
    <input type="radio" name="gender" value="woman" id="woman">
    <label for="woman"> woman </label>
	<input type="submit"  value="Greet me now"> <br> -->
    <!-- <label for="english">Do you speak english ?</label> -->
    <!-- <input type="radio" name="english" value="yes">
    <label for="yes">Yes</label>
    <input type="radio" name="english" value="no">
    <label for="no">No</label> -->

<!-- </form> -->
<?php 
//  if (isset($_GET['age'])And isset($_GET['gender'])){
//     $gender = $_GET['gender'];
//     $age = $_GET['age'];
// $english = $_GET['english'];      
// if ( $gender == 'woman' and $age>21 and $age <40) {
//    echo $message = 'welcome in the team';
//    return;
// }
// echo $message = 'nope';
// }
// if($age <= 12){
//     if($gender == 'man'){
//         if($english == 'yes'){
//             echo 'Hello Boy';
//         }else if ($english == 'no'){
//             echo "Aloha babyboy that's still english";
//         }
//     }
//     else if($gender == 'woman'){
//           if($english == 'yes'){
//             echo 'Hello Girl';
//         }else if ($english == 'no'){
//             echo "Aloha babygirl that's still english";
//         }
//     }
// }
// else if ( $age > 12 AND $age < 18){
//     if($gender == 'man'){
//           if($english == 'yes'){
//             echo 'Hello adolescent boy';
//         }else if ($english == 'no'){
//             echo "Aloha adolescent boy";
//         }
//     }
//     else if($gender == 'woman'){
//         if($english == 'yes'){
//             echo 'Hello adolescent girl';
//         }else if ($english == 'no'){
//             echo "Aloha adolescent girl";
//         }
//       }
//     }
//  else if ( $age > 18 AND $age < 115) {
//     if($gender =='man') {
//     if($english == 'yes'){
//             echo 'Hello Young adult man';
//         }else if ($english == 'no'){
//             echo "Aloha Young adult man";
//         }
//     }
//     else if($gender == 'woman'){
//         if($english == 'yes'){
//             echo 'Hello Young adult woman';
//         }else if ($english == 'no'){
//             echo "Aloha Young adult woman";
//         }
//     }   
// }
// else if ($age >= 115){
//     if($gender == 'man'){
//         if($english == 'yes'){
//             echo 'Hello Mister unkillable man';
//         }else if ($english == 'no'){
//             echo "Aloha Mister unkillable man";
//         }
//     }
//     else if($gender == 'woman'){
//         if($english == 'yes'){
//             echo 'Hello miss unkillable woman';
//         }else if ($english == 'no'){
//             echo "Aloha miss unkillable woman";
//         }
//     }
// }
// }
?>

</body>
</html>