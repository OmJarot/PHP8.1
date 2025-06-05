<?php

namespace FinalConstant;

class Foo
{
    final const XX = "foo";//tidak bisa di override lagi
}

class Bar extends Foo
{
    const XX = "Bar";
}