<?php

// class Sample
// {
//     public $ss;

//     // public function __construct() //default constructor
//     // {
//     //     echo 'Default Constructor';
//     // }
//     function __construct($res)
//     {
//         $this->ss = $res;
//     }
//     function infos()
//     {
//         echo 'Check this method: ' . $this->ss;
//     }
// }
// $s = new Sample('Abc');
// $s->infos();

class employee //aprent,base,super class
{
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function info()
    {
        echo '<p>Employee name is:' . $this->name . '</p>';
        echo '<p>Employee age is:' . $this->age . '</p>';
        echo '<p>Employee Salary is:' . $this->salary . '</p>';
    }
}

class manager extends employee
{
    public $ta = 1500;
    public $xyz = 600;
    public $totalSalary = 0;

    function info()
    {
        $totalSalary = $this->salary + $this->ta + $this->xyz;
        echo '<p>Employee name is:' . $this->name . '</p>';
        echo '<p>Employee age is:' . $this->age . '</p>';
        echo '<p>Employee Salary is:' . $totalSalary . '</p>';
    }
}

$e1 = new employee('Abc', 24, 15000);
$e1->info();

$m1 = new manager('Xyz', 22, 25000);
$m1->info();
?>
