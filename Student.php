<?php
Class Stud{
    public $stdID;
    public $stdName;
    public function prtStd(){
        print "ID : " . $this->stdID . "<br>";
        print "Name : " . $this->stdName . "<br>";
    }
}

$std01 = new Stud();
$std02 = new Stud();
$std01 -> stdID = "2019000001";
$std02 -> stdID = "2019000002";
$std01 -> stdName = "Kim";
$std02 -> stdName = "Lee";
$std01 -> prtStd();
$std02 -> prtStd();

print $std01 -> stdID;
?>