<?php require_once "./Calculator.php"; 

if ( isset($_POST['submit']) ) {
    
    if ( is_numeric($_POST['number1']) && is_numeric($_POST['number2']) ) {
        $calculator = new App\Calculator;
        $result = 0;

        if ( $_POST['operators'] == "plus" ) {
            $result = $calculator->add($_POST['number1'], $_POST['number2']);
        }

        if ( $_POST['operators'] == "minus" ) {
            $result = $calculator->subtract($_POST['number1'], $_POST['number2']);
        }

        if ( $_POST['operators'] == "multiply" ) {
            $result = $calculator->multiply($_POST['number1'], $_POST['number2']);
        }

        if ( $_POST['operators'] == "divide" ) {
            $result = $calculator->divide($_POST['number1'], $_POST['number2']);
        }

        echo "<h2>$result</h2>";
    } else {
        echo "<h2>0</h2>";
    }
}

