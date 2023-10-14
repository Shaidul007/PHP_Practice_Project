<?php

namespace App\Interfaces;

use App\Classes\BloodDonor;

interface BloodBankInterface {
    public function receivedBlood(BloodDonor $donor);
    public function getDonorsByBloodGroup($bloodGroup);
}