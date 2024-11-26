<?php
declare(strict_types=1);

require_once 'Person.php';

class Student extends Person {
    private int $gradeLevel; // Định kiểu thuộc tính là int

    public function __construct(string $name, int $age, int $gradeLevel) {
        parent::__construct($name, $age);
        $this->gradeLevel = $gradeLevel;
    }

    public function getGradeLevel(): int { // Định kiểu trả về là int
        return $this->gradeLevel;
    }

    public function introduce(): string { // Định kiểu trả về là string
        return parent::introduce() . " I am in grade " . $this->gradeLevel . ".";
    }
}