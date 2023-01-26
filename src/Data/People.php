<?php

namespace Rizal\Data;

class People
{

    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name)
    {
        echo "Hello $this->name, apa kabar ? " . PHP_EOL;
        echo "Hello $name, apa kabar ? ";
    }
}
