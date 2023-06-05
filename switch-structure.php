 <html>
    <body>
 <form>  
    <label name="grade" id="grade">Write your grades</label>
    <input type="number" min="0" max ="20" id="grade" name="grade">
</form>
<?php    
if (isset($_GET['grade'])){
    $grade = $_GET['grade'];

    switch($grade){
        case ($grade <= 4):
            echo 'This work is really bad. What a dumb kid!';
            break;
        case ($grade>=5 && $grade<=9): 
            echo 'This is not sufficient. More studying is required.';
            break;
        case ($grade == 10):
            echo 'barely enough!';
            break;
        case ($grade>=11 && $grade<=14):
            echo 'Not bad!';
            break;
        case ($grade>=15 && $grade<=18):
            echo 'Bravo, bravissimo!';
            break;
        case ($grade>=18 && $grade<=20):
            echo 'Too good to be true : confront the cheater!';
            break;

        default : 
        echo "nice wallhack";
        break;
    }
}




?>







</body>
</html>

