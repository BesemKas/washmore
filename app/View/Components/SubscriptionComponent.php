<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\SubscriptionPlan;

class SubscriptionComponent extends Component
{
    public $planToShow;

    public function __construct(SubscriptionPlan $planInstance) //<-- this is the instance of the SubscriptionPlan model called planInstance that is used in the home page :planInstance="$plan"
    /**
     * SubscriptionComponent class
     * 
     * This class is a part of the View Components in the Washmore application.
     * It is responsible for handling the subscription-related functionalities.
     * 
     */
    {
        $this->planToShow = $planInstance;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.subscription-component');
    }
}
