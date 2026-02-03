<?php
// local scope
function myTest()
{
    $x = 5;
    echo "Variable x inside function is: $x";
}
myTest();
// using x outside the function will not work
// echo "Variable x outside function is: $x";
echo "<br>";


// global
$x = 5; // global scope
myTest();
echo "<br>";


//static
function myTest1()
{
    static $x = 0; // static scope
    echo $x;
    $x++;
}
myTest1();
echo "<br>";
myTest1();
echo "<br>";
myTest1();
echo "<br>";

//PHP global Keyword
$x = 5;
$y = 10;
function myTest_global()
{
    global $x, $y;
    $y = $x + $y;
}
myTest_global();
echo $y . "<br>"; // outputs 15



// PHP $GLOBALS Superglobal
$x = 5;
$y = 10;
function myTest_super_global()
{
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest_super_global();
echo $y . "<br>"; // outputs 15
