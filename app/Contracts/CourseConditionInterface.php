<?php

namespace App\Contracts;

interface CourseConditionInterface{
    public function check(array $data) : bool;
}

