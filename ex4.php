<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
         $fruits = array("mango","orange","guava");
var_dump($fruits);
$fruits = array("mango", "orange", "guava");
$arrlength = count($fruits);
for($x = 0; $x < $arrlength; $x++) {
    echo $fruits[$x];
    echo "<br>";
}
        $x = 1; 
while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
} 
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
} 
        function writeMsg() {
    echo "Hello hema nandhini!";
}
writeMsg(); // call the function
        ?>
    </body>
</html>
