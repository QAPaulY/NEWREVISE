<?php
//1. Создать класс Cat:
class Cat
    {
        static $canFly = false;// булевое поле canFly со значением False
        public $name;
        public $age;
        public $hairColor = array();//поля name, age, массив строк hairColors
        public $isAlive;//булевое поле isAlive
        const lapki = 4;//Класс должен иметь в себе константу (любую)


        function __construct($name, $age, $hairColor, $isAlive)
            //данные значения должны задаваться в конструкторе и браться из его аргументов
        {
            $this->name = $name;//присваиваем значения переменным из конструктора
            $this->age = $age;
            $this->hairColor = $hairColor;
            $this->isAlive = $isAlive;
        }

        function __destruct()
        {
           $this->isAlive = false;
           echo '<br>Cat #'.$this->name.' was killed by dicructor';
           }


            //Класс должен иметь метод error(), который будет выбрасывать исключение:
            //throw new Exception("That's my error");
        public function error($err)
        {
            Try{
                if ($err = true)
                {throw new Exception("<br>That's my error");}
            }catch (Exception $e){
                echo$e->getMessage();
            }


        }



    }

//2.1. Создаем массив объектов Cat, в который через цикл добавляем 5 новых объектов
// Cat с различными значениями age (можешь использовать индекс цикла). Остальные
// параметры конструктора могут быть одинаковыми.

$cats = array();
    for ($i=1; $i<6; $i++)
        {
            $cats[$i] = new Cat ($i,$i,array ('red','black','white'),true);
            echo '<br>Cat #'.$i.' was created';
        }


//2.2. Выводим на экран сумму и произведение возрастов всех котов в массиве.
$summ = 0;
$mult = 1;
    for ($i=1; $i<6; $i++)
        {
            $summ = $summ + $cats[$i]->age;
            $mult = $mult * $cats[$i]->age;
        }
    echo '<br> Summ of age is '.$summ.' and mult of age is '.$mult;

//2.3. Выводим на экран информацию о том, есть ли в массиве котов хотя бы один кот
// с возрастом больше 3.

    for ($i=1; $i<6; $i++) {
        if ($cats[$i]->age>3)
        {
            $meny = $meny + 1;
        }
        }

    if ($meny >0)
        echo '<br>  There is cat over 3 years old';
//Если их несколько, то необходимо вывести сумму квадратных
// корней их возрастов.
    if ($meny >1)
        {
            for ($j=1; $j<6; $j++) {
                if ($cats[$j]->age>3)
                    {
                        echo '<br>  Cat #'.$j.' is over 3 years old';
                        $old = $old + ($cats[$j]->age * $cats[$j]->age);
            }
        }

    }
    echo '<br> Old is '.$old;

//2.4. Берем случайного кота из нашего массива, вызываем у него метод error()
// и перехватываем исключение, выводя на экран сообщение из исключения.


    $cats[rand(1,5)]->error(false);


//2.5. Создаем цикл, вложенный в цикл. Каждый цикл проходит по индексам от 1 до 100.
// В теле внутреннего цикла если произведение индексов циклов без остатка делится на
// 29, то код должен выходить из циклов через конструкцию goto
    for ($i=1; $i<100; $i++)
    {
        for ($j=1; $j<100; $j++)
        {
            if ($i*$j % 29)
                goto label;
        }
    }

    label:

//2.6. Проверяем значение canFly класса Cat и выводим сообщение о том, может ли кот летать.

    if ($canFly == false)
    {
        echo '<br> Cats cannot fly';}
        else
        {
            echo '<br>Cats can fly after kick';
        }

//2.7. Вызываем деструкторы всех котов.
