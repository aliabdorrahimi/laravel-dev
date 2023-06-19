<?php

namespace App\Providers;

use App\Conditions\CourseAvailabilityCondition;
use App\Conditions\StudentEligibilityCondition;
use App\Services\ConditionService;
use Illuminate\Support\ServiceProvider;

class ConditionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ConditionService::class,function($app)
        {
            $conditionService = new ConditionService();
            $conditionService->addCondition(new StudentEligibilityCondition());
            $conditionService->addCondition(new CourseAvailabilityCondition());
            // Add more conditions as needed

            return $conditionService;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
