<?php

namespace App\Http\Controllers;

use App\Services\ConditionService;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    private $conditionService;

    public function __construct(ConditionService $conditionService)
    {
        $this->conditionService = $conditionService;
    }

    public function selectCourse()
    {
        // Get the student's selected course data
        // Retrieve the course data (e.g., from a form input or database)
        $courseData = [
            "name"=>"physiotrapy",
            "num"=>12
        ];

        // Check the conditions using the condition service
        if ($this->conditionService->checkConditions($courseData)) {
            // All conditions pass, proceed with course selection
            // Add your course selection logic here
            return "all conditions passed.";
        } else {
            // At least one condition fails, handle the error
            // Add your error handling logic here
            return  "conditions fail.";
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
