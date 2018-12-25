<?php

//require_once "Classes/Cat.php";


Class Cat
{

    static $canFly = false;
    public $age;
    public $name;
    public $hairColor = array();
    public $isAlive;
    const Paws = 4;


    public function __construct($name, $age, $hairColors)
    {
        $this->age = $age;
        $this->name = $name;
        $this->hairColor = $hairColors;
        $this->isAlive = true;
        //$this->canFly = self::$canFly;

    }

    public function canFly()

    {
        if (self::$canFly == false) {
            echo "\n Cats cant't fly";}
    }

}

$cat = array();
// cats creation


for ($i = 0; $i < 4; $i++) {
    $cat[$i] = new Cat("Mursik$i", $i + 10, 'Grey');


}

var_dump($cat);
$z = 0;
$s = 1;
$r = 0;
$m = 0;

//cat age summ and cat age multiplication
for ($i = 0; $i < count($cat); $i++) {
    $z = $z + $cat[$i]->age;
    $s = $s * $cat[$i]->age;
}
echo $z, "\n", $s, "\n";


//search cats older than 3 years
for ($i = 0; $i < count($cat); $i++) {

    if ($cat[$i]->age > 3) {
        echo "there is cats older than 3 yers \n";
        $r = $r + sqrt($cat[$i]->age);
    }

}
echo $r, "\n";

for ($i = 1; $i < 100; $i++) {
    for ($j = 1; $j < 100; $j++) {
        if ($i * $j % 29 == 0) {
            echo "$i x $j / 29= ", $i * $j / 29;
            goto end;
        }
    }
}

end:


$cat[1]->canFly();