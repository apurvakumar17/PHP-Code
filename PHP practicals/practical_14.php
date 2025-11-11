<?php
// Base class
class Student {
    private $name;
    private $rollNumber;
    private $marks;

    // Constructor
    public function __construct($name, $rollNumber, $marks) {
        $this->name = $name;
        $this->rollNumber = $rollNumber;
        $this->marks = $marks;
    }

    // Getter and Setter for Name
    public function getName() { return $this->name; }
    public function setName($name) { $this->name = $name; }

    // Getter and Setter for Roll Number
    public function getRollNumber() { return $this->rollNumber; }
    public function setRollNumber($rollNumber) { $this->rollNumber = $rollNumber; }

    // Getter and Setter for Marks
    public function getMarks() { return $this->marks; }
    public function setMarks($marks) { $this->marks = $marks; }

    // Display method
    public function display() {
        echo "Name: {$this->name}<br>";
        echo "Roll Number: {$this->rollNumber}<br>";
        echo "Marks: {$this->marks}<br>";
    }
}

// Subclass
class GraduateStudent extends Student {
    private $specialization;

    // Constructor with parent constructor call
    public function __construct($name, $rollNumber, $marks, $specialization) {
        parent::__construct($name, $rollNumber, $marks);
        $this->specialization = $specialization;
    }

    // Getter and Setter for Specialization
    public function getSpecialization() { return $this->specialization; }
    public function setSpecialization($specialization) { $this->specialization = $specialization; }

    // Overridden display method
    public function display() {
        parent::display();
        echo "Specialization: {$this->specialization}<br>";
    }
}

// Example usage
$student = new GraduateStudent("Apurva Kumar", "04814902024", 89, "Computer Applications");
$student->display();

echo "<br><br><small>Apurva Kumar, 04814902024</small>";
?>