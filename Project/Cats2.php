<?php

interface Runnable
{
    public function run();

}


Abstract Class Cats
{
    public $color;
    protected $meow;
    protected $speed;

    public function __construct($color)
    {
        $this->color = $color;

    }

    public function meow()
    {
        echo $this->meow . "\n";
    }

    public function jump()
    {
        echo "jumped at $this->speed centimeters\n";
    }

    public function run()
    {
        echo "RUN CAT! RUN!\n";
    }

}

Class FastCat extends Cats
{
    protected $speed = 200;
    public $color;
    protected $meow = 'meow';

//    public function meow()
//    {
//        parent::meow();
//        echo "$this->meow\n";
//    }

    public function jump()
    {
        parent::jump();
        echo "Fast cats afrade to jump\n";
    }
}

Class SlowCat extends Cats
{
    protected $speed = 100;
    public $color;
    protected $meow = 'meeoow';

    public function run()
    {
        parent::run();
        echo "RUUUN CAAAT! RUUUN";
    }
}


$c = new SlowCat('green');
var_dump($c);
$c->meow();
$c->jump();
$c->run();