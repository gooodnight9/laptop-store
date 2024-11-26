<?php
declare(strict_types=1);

require_once 'Person.php';

class Teacher extends Person {
    private string $subject; // Định kiểu thuộc tính là string

    public function __construct(string $name, int $age, string $subject) {
        parent::__construct($name, $age);
        $this->subject = $subject;
    }

    public function getSubject(): string { // Định kiểu trả về là string
        return $this->subject;
    }

    public function introduce(): string { // Định kiểu trả về là string
        return parent::introduce() . " I teach " . $this->subject . ".";
    }
}