<?php

/**
 * This is an example of a simple stateless class that might be good for a utility function, or inspiration for
 * implementation of a simple calculator.
 */

class Calculator
{
    public static function exponent(int $number, int $exponent): int
    {
        return $number ** $exponent;
    }
}