<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$lists = [345,56,89,05,365,415,84]; //listing array elements
echo max($lists); // printing the maximum value in an array
echo "<br>";

echo min($lists); // printing the minimum value in an array
echo "<br>";

sort($lists);     // sorting the array in increasing order
print_r($lists);  // printing the array elements with array length
echo "<br>";
?>
    
</body>
</html>