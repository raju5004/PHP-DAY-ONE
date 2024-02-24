<?php


// $a = 10;
// $b = 23;
// $c = 26;

// if($a % 2 == 22){
//     echo "Even ba Jor Sonkha";

// }else{
//     echo " Odd ba Bijor Sonkha";
// }

// $raju = 12;
// $rakib = 13;
// $jakir = 14;

// if(($raju==12) && ($jakir == 15)){
//     echo " They are same";
// }elseif($jakir == 16){
//     echo " It'e the alternative thing";
// }elseif($rakib == 13){
//     echo"Rakib is a gay";
// }
// else{
//     echo " they are not same thing";
// }

// Let's Learn Ternary Operator


//Function Arguments 
// function someNames($name, $birth_year, $place){
//     echo "$name  Born in $birth_year $place <br>";

// }


// someNames("Raju","2002", "Dhaka");

//Function PHP Default Argument Value

// function defaultArg($def = 50){
//     echo "$def <br>";
// }

// defaultArg();
// defaultArg(250);

//PHP Functions - Returning values

// function funName($x, $y){
//     $z = $x + $y;
//     return $z;
// }

// echo "5 + 11 = " . funName(5, 11) . "<br>";

// function funName($hello, $hi){
//     $how = $hello + $hi;
//     return $how;
// }

// echo "34 + 34 = " . funName(34,34);


//Passing Arguments by Reference

// function passArg( &$value){
//     $value += 5;

// }

// $num = 4;
// passArg($num);
// echo $num;


// function sumMyNumbers(...$x){
//     $n = 0;
//     $len = count($x);
//     for ($i = 0; $i < $len; $i++) {
//         $n += $x[$i];}

//         return $n;
// }



// $a = sumMyNumbers(5,2,6,2,7,7);
// echo $a;

// function myFamily($lastname, ...$firstname){
//     $txt = "";
//     $len = count($firstname);
//     for ($i = 0; $i < $len; $i++) {
//         $txt .= $firstname[$i]." Hi".$lastname;
//     }
//     return $txt;
// }

// $a = myFamily("Raju","Rakib");
// echo $a;

// User-Defined Function
//Example #1 Pseudo code to demonstrate function uses


// $makefoo = true;

// smt2();

// if ($makefoo) {
//     function smt(){
//         echo "I dont exist until program execution reaches me .";
//     }
// }

// if ($makefoo) {
//     function smt3(){
//         echo "Iam smt3";
//     }
// }

// if ($makefoo) {
//     function smt4(){
//         echo "Iam smt4";
//     }
// }

// if ($makefoo) smt(); smt3(); smt4();
// function smt2(){
//     echo "I exist immidiately upon program start";
// }

// 


// function funName(){
//     if( 2>0){
//         echo "Hello";
//     }else{
//         echo "Mile nai";
//     }
// }

// funName();


// foreach loop by arrays

// $raju = array("red", "blue", "green");

// foreach ($raju as $say){
//     echo "$say <br>";
// }

// foreach ($raju as $say){
//     echo "$say <br>";
// }