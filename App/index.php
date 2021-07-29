<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator1.0</title>
</head>
<body>
    <div class="calculator">
        <form action="" method="POST">
            <div class="display"> 
            <?php require_once "./calculatorController.php";?>
            </div>
        <div class="control">
            <input type="text" name="number1" id="number1">
            <select name="operators" id="operators">
                <option value="plus">+</option>
                <option value="minus">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="text" name="number2" id="number2">
        </div>
        <button type="submit" name="submit">Calc</button>
        </form>
    </div>
</body>
</html>