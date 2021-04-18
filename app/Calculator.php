<?php

class Calculator {

    public function sum($a, $b) {
        return $a + $b;
    }

    public function substract($a, $b) {
        return $a - $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }

    public function divide($a, $b) {
        try{
            if ($b == 0) {
                throw new Exception('Can\'t divide by zero.');
            }
            return $a/$b;
        }
        catch(exception $e){
            return $e->getMessage();
        }
    }
}