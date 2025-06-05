<?php

namespace NewinInitializer;

require_once "..\ReadOnly\Category.php";
use ReadOnly\Category;

class Product
{
    public function __construct(public string $name,
                                public Category $category = new Category("2", "Piter"//membuat default di object
                                ))
    {
    }
}

$product = new Product("Piter");
var_dump($product);
