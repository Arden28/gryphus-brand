<?php


if (!function_exists('make_reference_id')) {
    function make_reference_id($prefix, $number) {
        $padded_text = $prefix . '-' . str_pad($number, 5, 0, STR_PAD_LEFT);

        return $padded_text;
    }
}

if (!function_exists('convertToInt')) {
    function convertToInt($value){
        // Assuming $cart->total() returns a string like "12.500,00"
        $totalString = $value;

        // Remove commas and dots from the string and keep only digits
        $totalWithoutCommasAndDots = str_replace([',', '.'], '', $totalString);

        // Convert the resulting string to an integer
        $value = (int) $totalWithoutCommasAndDots / 100;

        return $value;
    }
}
