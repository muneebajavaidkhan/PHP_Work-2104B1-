<?php

abstract class Base
{
    abstract function printdata();
}

class Derived extends Base
{
    function printdata()
    {
        echo 'Derived Class';
    }
}

$x = new Derived();

$x->printdata();
?>
