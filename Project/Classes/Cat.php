<?php

Class Cat
{

    static $canFly = false;
    public $age;
    public $name;
    public $hairColor = array();
    public $isAlive;
    const Paws = 4;
    public $cats = array();

    public function __construct($name, $age, $hairColors, $isAlive)
    {
        $this->age = $age;
        $this->name = $name;
        $this->hairColor;
        $this->isAlive = $isAlive;


    }

    public function catCreation($age)
    {
        $this->cats = array_fill($age, 1, $age);

        print_r($this->cats[$age]);
        echo "\n";


    }
    public function returnCats (){
        Return $this->cats;
    }
}