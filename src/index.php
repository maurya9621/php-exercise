<!-- //php syntax -->
<!-- hello world -->
<?php
echo "hello-world" ."<br>";

?>

<!-- opening and closing tag -->

<?php
 echo "opening & closing tag" ."<br>";
?>

<!-- single line comment in php -->

<?php
 #This is a single-line comment 
 // this is a single line comment.
?>

<!-- multiline comment -->
<?php
 /*This is a single-line comment 
  this is a single line comment. */
?>

<!-- Statements in PHP have to end with a special character, which one? -->
<?php
 echo "that special character is ; .<br>";
?>

<!-- Create a variable named txt and assign the value "Hello". -->
<?php
 $txt= "Hello"."<br>" ;
?>

<!-- Create one variable named x, and one variable named y, then use the echo statement to output the sum of x and y -->

<?php
 $x=5;
 $y=6;
 echo $x+$y ."<br>" ;
?>

<!-- php string -->

<!-- Get the length of the string "Hello World" -->
<?php
 echo strlen("Hello world" ."<br>");
?>

<!-- Reverse the string "Hello World!". -->
<?php
 echo strrev("Hello world")."<br>";
?>

<!-- Replace the word "World" with the word "Dolly". -->
<?php
$oldtxt = "Hello World!";
$newtxt = str_replace("World","Dolly" ,$oldtxt );
echo $newtxt."<br>";
?>

<!-- php operators -->

<!-- Multiply 10 with 5, and output the result. -->
<?php
$x=10;
$y=5;
echo ($x*$y)."<br>";
?>

<!-- Divide 10 by 2, and output the result. -->
<?php
$x=10;
$y=2;
echo ($x/$y)."<br>";
?>

<!-- Use the correct comparison operator to check if $a is equal to $b. -->
<?php
$a=5;
$b=5;
 var_dump($a==$b);
?><br>

<!-- Use the correct comparison operator to check if $a is NOT equal to $b. -->
<?php
$a=5;
$b=3;
 var_dump($a!=$b) ;
?><br>

<!-- Output "Hello World" if $a is greater than $b. -->
<?php
$a = 50;
$b = 10;
 if ($a>$b); 
 {
  echo "Hello World";
}
?><br>

<!-- Output "Hello World" if $a is not equal to $b. -->
<?php
$a = 50;
$b = 10;
 if ($a!=$b); 
 {
  echo "Hello World";
}
?><br>

<!-- Output "Yes" if $a is equal to $b, otherwise output "No". -->
<?php
$a = 50;
$b = 10;
if ($a == $b) {
  echo "Yes";
} 
 else
 {
  echo "No";
}
?><br>

<!-- Output "1" if $a is equal to $b, print "2" if $a is greater than $b, otherwise output "3". -->
<?php
$a = 50;
$b = 10;
if ($a == $b) {
  echo "1";
} 
 elseif($a > $b) {
  echo "2";
} 
 else {
  echo "3";
}
?><br>

<!-- Create a switch statement that will output "Hello" if $color is "red", and "welcome" if $color is "green". -->

<?php
    switch($color) {
  
 case "red":
     echo "Hello";
     break;
   
  case "green":
     echo "Welcome";
     break;
 }
 ?><br>

<!-- Add a section that will output "Neither" if $color is neither "red" nor "green". -->
<?php
switch ($color) {
  case "red":
    echo "Hello";
    break;
  case "green":
    echo "Welcome";
    break;
  
default:

    echo "Neither";
}
?><br>

<!-- loops -->
       <!-- Output $i as long as $i is less than 6. -->

       <?php  
$x = 1;
 
while($x <= 5) {
  echo " $x <br>";
  $x++;
} 
?>  <br>

<!-- Output $i as long as $i is less than 6. -->
<?php 
$x = 1;
do {
  echo " $x <br>";
  $x++;
} while ($x <= 5);
?><br>

<!-- Create a loop that runs from 0 to 9. -->
<?php  
for ($x = 0; $x < 10; $x++) {
  echo " $x <br>";
}
?>  <br>

<!-- Loop through the items in the $colors array. -->
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?><br>

<!-- Create a function named myFunction. -->
<?php
function my_Function() {
  echo "Hello World!";
}
?><br>

<!-- Call (execute) a function named MyFunction. -->
<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg();
?><br>



