<?php
class people{
    protected $name;
    protected $age;
    public function printpeople() {
        printf("%s <br>", $this->name);
        printf("%d <br>", $this->age);
    }
}
class Student extends People {
    private $ID;
    function __construct($name, $age, $ID) 
    {
        $this->name = $name;
        $this->age = $age;
        $this->ID = $ID;
    }
    function printStudent() {
        printf("---Student ---<br>");
        $this -> printPeople();
        printf("%s <br>",$this->ID);
    }
}
class Professor extends People {
    private $officeNo;
    function __construct($name, $age, $officeNo) 
    {
        $this->name = $name;
        $this->age = $age;
        $this->officeNo = $officeNo;
    }
    function printProfessor() {
        printf("---Professor ---<br>");
        $this -> printPeople();
        printf("%s <br>",$this->officeNo);
    }
}
class Staff extends People {
    private $title;
    function __construct($name, $age, $title) 
    {
        $this->name = $name;
        $this->age = $age;
        $this->title = $title;
    }
    function printStaff() {
        printf("---Staff ---<br>");
        $this -> printPeople();
        printf("%s <br>",$this->title);
    }
}
$std1 = new Student("홍길동", 22, "2019123456");
$prof1 = new Professor("김주현",50,"공과대123호" );
$stf1 = new Staff("백승수",49, "행정실");
$std1->printStudent();
$prof1->printProfessor();
$stf1->printStaff();
?>