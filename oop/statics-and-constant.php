<?php

class Math {
    public static function add(...$nums)
    {
        return array_sum($nums);
    }
}

// echo Math::add(1, 2, 3);

class Person2 {
    public static $age =1;

    public function haveBirthday()
    {
        static::$age += 1;
    }
}

$joe = new Person2;
$joe->haveBirthday();
$joe->haveBirthday();

$jane = new Person2();
$jane->haveBirthday();

// echo Person2::$age;

// COnstant

class BankAccount {
    const TAX = .09;
}

echo BankAccount::TAX;
