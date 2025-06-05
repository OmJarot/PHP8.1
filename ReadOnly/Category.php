<?php

namespace ReadOnly;

class Category
{
    //readonly
    public readonly string $id;// tidak bisa menambahkan default value, hanya bisa di isi sekali contoh saat menggunakan constructor
    public readonly string $name;

    public function __construct(string $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    //menggunakan promote constructor
//    public function __construct(public readonly string $id, public readonly string $name)
//    {
//    }
}

$category = new Category("1", "Smartphone");