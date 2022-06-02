<?php
// constant variable 
define('NAME','khalid bouychou');
$title = "learn php ";
$prix =  25;

// strings

$fullname = "my name is ".NAME;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
</head>
<body>
    <h1><?php echo $title ;?></h1>
       <p>name : <?php echo $fullname;?></p>
       <p>title : <?php echo $title;?></p>
       <p>price : <?php echo $prix.'dh';?></p>
    <hr>
    <p>
        lenght of my name is : <?php echo strlen(NAME);?><br>
        display y letter : <?php echo NAME[10];?><br>
        transform to uppercase : <?php echo strtoupper(NAME);?><br>
        transform to lowercase : <?php echo strtolower(NAME);?><br>    
    </p>
   
</body>
</html>