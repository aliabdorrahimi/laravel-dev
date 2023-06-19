<?php

namespace App\Services;

use App\Contracts\CourseConditionInterface;

class ConditionService {

    private $conditions;

    public function __construct()
    {
        $this->conditions = collect();
    }


    public function addCondition(CourseConditionInterface $condition)
    {
        $this->conditions->push($condition);
    }

    public function checkConditions(array $data): bool
    {
        foreach ($this->conditions as $condition) {
            if (!$condition->check($data)) {
                return false;
            }
        }

        return true;
    }
}