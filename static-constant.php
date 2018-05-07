<?php

class Math {
    public function add(...$nums)
    {
        return array_sum($nums);
    }
}
$math = new Math;
//var_dump($math->add(1,2,3));


Class newMath {
    public static function newAdd(...$nums)
    {
     return array_sum($nums);
    }
}
echo newMath::newAdd(1,2,3);

class BankAccount {
    const TAX = 0.09;
}
echo BankAccount::TAX;
