<?php

namespace EnumInheritance;
require_once "Gender.php";
class Customer
{
    public function __construct(public string $name, public Gender $gender)
    {
    }
}