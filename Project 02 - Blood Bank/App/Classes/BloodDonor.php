<?php
namespace App\Classes;
abstract class BloodDonor {
    private $name;
    private $bloodGroup;
    private $age;

//initialize
    public function __construct( $name, $bloodGroup, $age ) {
        $this->name       = $name;
        $this->bloodGroup = $bloodGroup;
        $this->age        = $age;
    }
    //method
    abstract public function donateBlood();
    //Display korar jonno
    public function  DisplayDonorInfo() {
        echo "Name: " . $this->name . PHP_EOL   ;
        echo "Blood Group: " . $this->bloodGroup . PHP_EOL  ;
        echo "Age: " . $this->age . PHP_EOL ;
    }
//getter=>name return korbhe
    public function getName() {
        return $this->name;
    }
    //getter=>Blood Group return korbhe
    public function getBloodGroup() {
        return $this->bloodGroup;
    }
}
