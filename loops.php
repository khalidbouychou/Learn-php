<pre>
    <?php

    $courses = ['laravel' , 'php' , 'java','c','javascript'];
    //while loop
    $i = 0;
    while ($i < count($courses)) {
        echo $courses[$i]."\t";
        $i++;
    }
    echo "<hr>";
    // for loop 
    for ($i=0; $i < count($courses); $i++) { 
        # code...
        echo $courses[$i]."\t";
    }
    echo "<hr>";
    //foreach---
    foreach ($courses as $course) {
        # code...
        echo $course."\t";
    }



$courses=[
    ['title' => 'learn laravel ' , 'price'=>40],
    ['title' => 'learn reactjs' , 'price'=>60],
    [ 'title' => 'learn angular' , 'price'=>50],
    [ 'title' => 'learn php' , 'price'=>20]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>list courses</h1>
    <ul>
        <?php foreach ($courses as $course ){ ?>
        <li> <?php echo $course['title'].'==> '.$course['price']?></li>
        <?php }?>
    </ul>
</body>
</html>
