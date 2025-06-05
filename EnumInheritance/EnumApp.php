<?php

use EnumInheritance\Customer;
use EnumInheritance\Gender;

require_once "Customer.php";

var_dump(Gender::PRIA->sayHello());
var_dump(Gender::WANITA->sayHello());
var_dump(Gender::PRIA->inIndonesia());
var_dump(Gender::WANITA->inIndonesia());

//static
var_dump(Gender::fromIndonesia("Tuan"));
var_dump(Gender::fromIndonesia("Nyonya"));