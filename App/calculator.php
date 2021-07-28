<?php

namespace App;

class Calculator {

    public function add( $number1, $number2 ) {
        return $number1 + $number2;
    }

    public function subtact( $number1, $number2 ) {
        return $number1 - $number2;
    }

    public function multiply( $number1, $number2 ) {
        return $number1 * $number2;
    }

    public function divide( $number1, $number2 ) {
        return $number1 / $number2;
    }

}