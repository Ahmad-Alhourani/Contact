<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

/**
 * Class EventServiceProvider.
 */
class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        //
    ];

    /**
     * Class event subscribers.
     *
     * @var array
     */
    protected $subscribe = [
        /*
         * Frontend Subscribers
         */

        /*
         * Auth Subscribers
         */
        \App\Listeners\Frontend\Auth\UserEventListener::class,

        /*
         * Backend Subscribers
         */

        /*
         * Auth Subscribers
         */
        \App\Listeners\Backend\Auth\User\UserEventListener::class,
        \App\Listeners\Backend\Auth\Role\RoleEventListener::class,

        //start_Address_start
        \App\Listeners\Backend\AddressEventListener::class,
        //end_Address_end

        //start_Customer_start
        \App\Listeners\Backend\CustomerEventListener::class,
        //end_Customer_end

        //start_CustomerAddress_start
        \App\Listeners\Backend\CustomerAddressEventListener::class,
        //end_CustomerAddress_end

        //start_Status_start
        \App\Listeners\Backend\StatusEventListener::class,
        //end_Status_end

        //start_Contact_start
        \App\Listeners\Backend\ContactEventListener::class,
        //end_Contact_end

        //start_Outcome_start
        \App\Listeners\Backend\OutcomeEventListener::class,
        //end_Outcome_end

        //start_Type_start
        \App\Listeners\Backend\TypeEventListener::class,
        //end_Type_end

        //start_ContactActivity_start
        \App\Listeners\Backend\ContactActivityEventListener::class
        //end_ContactActivity_end

        // Do not delete me :) I'm used for auto-generation
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
