<?php
namespace App\Traits;

use App\Classes\BloodDonor;

trait BloodTestingTraits{
    public function testBloodGroup(BloodDonor $donor){
        echo "Blood Test for Donor: " . $donor->getName() . PHP_EOL;
        echo "Blood Group: " . $donor->getBloodGroup() . PHP_EOL;
        echo "Result: Blood Group is Comparable" . PHP_EOL;
    }
}