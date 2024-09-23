<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        input[type="text"], input[type="number"] {
            width: 100px;
            margin: 5px;
        }
        input[type="submit"] {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h1>Simple Calculator</h1>
<form method="post">
    <input type="number" name="num1" placeholder="First Number" required>
    <input type="number" name="num2" placeholder="Second Number" required>
    <br>
    <input type="submit" name="operation" value="Add">
    <input type="submit" name="operation" value="Subtract">
    <input type="submit" name="operation" value="Multiply">
    <input type="submit" name="operation" value="Divide">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = '';

    switch ($operation) {
        case 'Add':
            $result = $num1 + $num2;
            break;
        case 'Subtract':
            $result = $num1 - $num2;
            break;
        case 'Multiply':
            $result = $num1 * $num2;
            break;
        case 'Divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero!";
            }
            break;
        default:
            $result = "Invalid operation.";
    }

    echo "<h2>Result: $result</h2>";
}
?>

</body>
</html>