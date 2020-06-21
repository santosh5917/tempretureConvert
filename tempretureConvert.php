<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Convert</title>
<link rel="stylesheet" href="css/tempretureConvert.css">
<link href="https://fonts.googleapis.com/css2?family=Muli:wght@200&display=swap" rel="stylesheet"> 
</head>
<body>
<header>
<h1>Temperature Convert</h1>
<div class="main-div">
    <div class="left-side">
    <img src="img/eezy_01.svg" alt="img" width="340" height="340">
    </div>

    <div class="right-side">
        <form action="#" method="post">
        <input type="text" name="num" placeholder="Enter Your Number" class="input">

        <div class="section">
        <label for="cel">cel</label><input type="radio" name="unit" value="cel">
        <label for="feh">faren</label><input type="radio" name="unit" value="feh">
        </div>

        <input type="submit" name="submit" value="convert" class="btn">
        </form>
        <p>
    <?php
    if(isset($_POST['submit'])){
        $num=$_POST['num'];
        $temp=$_POST['unit'];
        if ( $temp=="cel") {
            $result=$num * 9 / 5 + 32;
            
            echo 'the conversion value of cel to fern is' .$result;
        }elseif($temp=="feh"){
            $result=($num - 32) * 5 / 9;
            echo 'the conversion value of fern to cel is' .$result;
        }else {
            
            echo 'choose correct options';
        }
    }

    ?>
    </p>
    </div>
    
</div>
</header>
    
</body>
</html>