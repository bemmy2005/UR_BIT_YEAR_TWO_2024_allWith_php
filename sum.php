<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Result</title>
</head>
<body>
    <h2>Sum Result</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $sum = $num1 + $num2;
        echo "<p>The sum of $num1 and $num2 is: $sum</p>";
    }
    ?>
</body>
</html>
