<pre>

<?php

$people = ["khalid","adnane","walid"];

// $people[] = "walid";
array_push($people,"fatima");
print_r($people) ;

// associatuve arrays

$contacts = ["khalid"=>"06122" , "adnane"=>"06222"];
echo $contacts["khalid"];
echo "<hr>";
// ---------spread operator ------
// $numbers1 = [1,2,3];
// $numbers2 = [4,5,6];

// print_r(array_merge($numbers1,$numbers2)) ;

// echo "<br>";

// $res = [1999,$numbers1,$numbers2,2000];
// print_r($res);
//-------Multidimensional Arrays - MATRIX------

$courses=[
         ['title' => 'learn laravel ' , 'price'=>40],
         ['title' => 'learn reactjs' , 'price'=>60],
         [ 'title' => 'learn angular' , 'price'=>50],
         [ 'title' => 'learn php' , 'price'=>20]
 ];

//  $courses[] = ['title'=>'learn nodejs','price'=>45];
 $courses =[['title'=>'learn nodejs','price'=>45],...$courses];
print_r($courses);