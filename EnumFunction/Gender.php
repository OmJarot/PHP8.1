<?php

namespace EnumFunction;

enum Gender: string //dapat merepresentasikan string
{
    case PRIA = "Mr";
    case WANITA = "Mrs";

    function sayHello():string
    {
        return "Hello ".$this->value;
    }

    function inIndonesia(): string
    {
        return match ($this){
            Gender::PRIA => "Tuan",
            Gender::WANITA => "Nyonya"
        };
    }

    //static
    static function fromIndonesia(string $value):Gender
    {
        return match ($value){
            "Tuan" => Gender::PRIA,
            "Nyonya" => Gender::WANITA
        };
    }
}