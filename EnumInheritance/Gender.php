<?php

namespace EnumInheritance;

interface SayHello
{
    function sayHello(): string;
}
trait IndonesiaGender
{
    function inIndonesia(): string
    {
        return match ($this){
            Gender::PRIA => "Tuan",
            Gender::WANITA => "Nyonya"
        };
    }
}

enum Gender: string implements SayHello // dapat melakukan inheritance juga
{
    case PRIA = "Mr";
    case WANITA = "Mrs";

    const Unknown = "Unknown"; //bisa menambahkan constant

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