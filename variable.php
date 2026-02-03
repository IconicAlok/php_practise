<!DOCTYPE html>
<html>

<head>
    <title>Php Preactise</title>
</head>

<body>
    <?php
    // Create PHP Variables
    $x = 5; //is an integer
    $y = "John"; //is an string
    $txt = "Php.com";
    //out put variables
    echo $x . "<br>";
    echo $y . "<br>";
    echo  "<h2>$txt</h2>" . "<br>";
    echo 'i love ' . $txt . '!' . "<br>";
    echo "i love $txt!" . "<br>";

    //output the sum of two variables
    $a = 5;
    $b = 4;
    echo "the sum of 4 and 5 = " . $a + $b . "<br>";

    //Data Type
    var_dump(5);
    echo "data type and the value 5<br>";
    var_dump("John");
    echo "data type and the value John<br>";
    var_dump(3.14);
    echo "data type and the value 3.14<br>";
    var_dump(true);
    echo "data type and the value boolean 'true'<br>";
    var_dump([2, 3, 56]);
    echo "data type and the value [1, 3, 56]<br>";
    var_dump(NULL);
    echo "data type and the value 'NULL'<br>";
    echo "<br>";

    //Assign Multiple Values
    $x = $y = $z = "Fruit";

    
    ?>
</body>

</html>