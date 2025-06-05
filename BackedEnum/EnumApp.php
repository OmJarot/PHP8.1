<?php

use EnumBacked\Customer;
use EnumBacked\Gender;

require_once "Customer.php";

function sayHello(Customer $customer): string
{
    if ($customer->gender == null){
        return "Hello $customer->name";
    }else{
        return "Hello ". $customer->gender->value. ". ". $customer->name; // mengambil value enum
    }
}

var_dump(sayHello(new Customer("Piter", Gender::PRIA)));
var_dump(sayHello(new Customer("Pitri", Gender::WANITA)));
//atau
var_dump(sayHello(new Customer("Piter", Gender::from("Mr"))));//jika tidak ada maka error
var_dump(sayHello(new Customer("Pitri", Gender::tryFrom("Mrs"))));//jika salah akan null

var_dump(Gender::cases());//mengambil nilai semua enum