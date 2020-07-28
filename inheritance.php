<?php
class Person{
    public $name;
    public $address;
    public function __construct($name,$address){
        $this->name=$name;
        $this->address=$address;
    }
    public function showInfo(){
        echo $this->name."<br>".$this->address;    
    }
}
class Student extends Person{
    public $program;
    public $year;
    public $fee;
    public function __construct($name,$address,$program,$year,$fee){
        $this->name=$name;
        $this->address=$address;
        $this->program=$program;
        $this->year=$year;
        $this->fee=$fee;
    }
    public function showInfo(){
        echo $this->name;
        echo "<br>";
        echo $this->address;
        echo "<br>";
        echo $this->program;
        echo "<br>";
        echo $this->year;
        echo "<br>";
        echo $this->fee;
    }
}
class Staff extends Person{
    public $school;
    public $pay;
    public function __construct($name,$address,$school,$pay){
        $this->name=$name;
        $this->address=$address;
        $this->school=$school;
        $this->pay=$pay;

    }
    public function showInfo(){
        echo $this->name;
        echo "<br>";
        echo $this->address;
        echo "<br>";
        echo $this->school;
        echo "<br>";
        echo $this->pay;
    }
}
$student=new Student("Win","Yangon","student1",6,5000000);
echo "<h2>Student Information</h2>";
$student->showInfo();
echo "<br>";
$staff=new Staff("War","Mandalay","state3",4500000);
echo "<h2>Staff Information</h2>";
$staff->showInfo();
?>