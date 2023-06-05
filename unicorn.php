<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="get" >
    <label for="race">What are you ?</label>
    <input type="text" name="race" id="race">
</form>


    <?php   
if (isset($_GET['race'])){
    $race = $_GET['race'];

    if ($race == "human"){
        echo '<iframe src="https://giphy.com/embed/adg7CpC5U575yNPbOK" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/MontreuxComedy-adg7CpC5U575yNPbOK">via GIPHY</a></p>';
    }
    else if ($race == "cat"){
        echo '<iframe src="https://giphy.com/embed/ovvkh0AoZVHq0" width="480" height="369" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/ovvkh0AoZVHq0">via GIPHY</a></p>';

    }
    else if ($race == "unicorn"){
        echo '<iframe src="https://giphy.com/embed/lN1MTl03Qls145LJ3w" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/PlayWonderlands-unicorn-day-butt-stallion-lN1MTl03Qls145LJ3w">via GIPHY</a></p>';
    }
}

?>
    
</body>
</html>








