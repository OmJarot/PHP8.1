<?php

use Enum\Customer;
use Enum\Gender;

require_once "Customer.php";

function sayHello(Customer $customer): string
{
    if ($customer->gender == Gender::PRIA){
        return "Hello Mr. $customer->name";
    }elseif($customer->gender == Gender::WANITA){
        return "Hello Mrs. $customer->name";
    }else{
        return "Hello $customer->name";
    }
}

var_dump(sayHello(new Customer("Piter", Gender::PRIA)));
var_dump(sayHello(new Customer("Pitri", Gender::WANITA)));

var_dump(Gender::cases());//mengambil nilai semua enum