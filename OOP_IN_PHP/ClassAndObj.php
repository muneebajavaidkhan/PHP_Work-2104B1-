<?php

class car
{
    public $model, $name; //properties

    //Methods
    function GetDetail($m, $n)
    {
        echo $this->model = $m;
        echo $this->name = $n;
    }
}

$c = new car();
$c->GetDetail(101, 'Honda');
?>
