<?php
//создать класс operation, поля a и b поля инициализируются в конструкторе
//добавить классу методы execute(в теле метода просто return)
//еще 2 класса - Плюс (наследник оперейшн), Минус (наследник оперейшн), для них переопределить execute(для Плюса складывает, минус - вычитает
//класс Калькулятор с 1 статическим методом getInstance() - получить через форму значение а, б и операцию,
// в зависимости от переданных данных(операция) будет возвращать объект того или иного класса
class Operation
{
    protected $a;
    protected $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function execute() {
        return;
    }
}

class Plus extends Operation
{
    public function execute()
    {
        return $this->a+$this->b;
        //return parent::execute(); //
    }
}

class Minus extends Operation
{
    public function execute()
    {
        return $this->a-$this->b;
    }
}

class Calculator
{
    private static $instance;
    private function __construct()
    {
    }

    public static function getInstance($a, $b, $operation) {
        if ($operation == Plus::class) {
            self::$instance = new Plus($a, $b);
        } else {
            self::$instance = new Minus($a, $b);
        }
        return self::$instance;
    }

}


$operation = Calculator::getInstance(1, 2, Minus::class);
var_dump($operation->execute());