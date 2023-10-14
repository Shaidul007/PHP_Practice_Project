<?php
namespace App\Classes;

use App\Interfaces\BloodBankInterface;

class BloodBank implements BloodBankInterface{
    use BloodTestingTraits;
    private $donors = [];
    public function receivedBlood(BloodDonor $donor){
        $this->donors[] = $donor;
        echo "Received Blood from Donor: " . $donor->getName() . PHP_EOL;
    }
    public function getDonorsByBloodGroup($bloodGroup){

    }
}

//57