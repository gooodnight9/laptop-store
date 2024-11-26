<?php
declare(strict_types=1);

class Person {
    protected string $name; // Định kiểu thuộc tính là string
    protected int $age;     // Định kiểu thuộc tính là int

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string { // Định kiểu trả về là string
        return $this->name;
    }

    public function getAge(): int { // Định kiểu trả về là int
        return $this->age;
    }

    public function introduce(): string { // Định kiểu trả về là string
        return "Hi, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }

    public function FindPerson(String $name , $Personarray){

    }
}