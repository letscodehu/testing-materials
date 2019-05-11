<?php

namespace App;

class RomanNumberConverter {

    private $romanNumberMap = [
        1000 => "M",
        900 => "CM",
        500 => "D",
        400 => "CD",
        100 => "C",
        90 => "XC",
        50 => "L",
        40 => "XL",
        10 => "X",
        9 => "IX",
        5 => "V",
        4 => "IV",
        1 => "I"
    ];

    public function convert($arabic) {
        $this->validate($arabic);
        $romanNumberSolution = "";
        foreach ($this->romanNumberMap as $arabicValue => $romanValue) {
            while ($arabic >= $arabicValue) {
                $romanNumberSolution.= $romanValue;
                $arabic-= $arabicValue;
            }
        }
        return $romanNumberSolution;
    }

    private function validate($arabic) {
        if (!is_numeric($arabic) || $arabic < 1) {
            throw new \InvalidArgumentException();
        }
    }

}