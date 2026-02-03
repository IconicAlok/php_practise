<!DOCTYPE html>
<html >
<head>
    <title>Php Preactise</title>
</head>

<body>
    <?php
    //Echo Print
    echo "Hello World!";
    echo "<h2>PHP is Fun!</h2>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";

    //simple varialbe
    $txt1 = "Learn PHP";
    $txt2 = "php.com";

    echo "<h1>$txt1</h1>";
    echo "<h1>$txt2</h1>";
    //Single or Double Quotes?
    echo '<h2>' . $txt1 . '</h2>';
    echo '<p>Study PHP at ' . $txt2 . '</p>';
    //PHP print Function
    print "Hello";
    print("Hello");

    print "<h2>PHP is Fun!</h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!";

    //Display Variables
    $txt1 = "Learn PHP";
    $txt2 = "php.com";
    print "<h2>$txt1</h2>";
    print "<p>Study PHP at $txt2</p>";
    print '<h2>' . $txt1 . '</h2>';
    print '<p>Study PHP at ' . $txt2 . '</p>';
    ?>










</body>
</html>