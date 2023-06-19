<?php

namespace App\Conditions;

use App\Contracts\CourseConditionInterface;

class StudentEligibilityCondition implements CourseConditionInterface{

    public function check(array $data): bool
    {
        // Perform the eligibility check logic here
        // Example: Check if the student meets the eligibility criteria
        // You can access the necessary data from the $data array

        return true; // Replace with your actual condition check result
    }

}