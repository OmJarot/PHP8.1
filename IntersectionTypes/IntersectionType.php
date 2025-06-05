<?php
interface HasBrand
{
    function getBrand(): string;
}

interface HasName
{
    function getName(): string;
}

class Product implements HasBrand, HasName
{

    private string $brand;

    private string $name;

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}

$product = new Product();
$product->setName("Sepatu");
$product->setBrand("Adidas");
function printBrandAndName(HasBrand & HasName $value):void //harus turunan dari HasBrand dan HasName
{
    echo $value->getBrand() . "-".$value->getName().PHP_EOL;
}

printBrandAndName($product);