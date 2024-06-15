<?php

namespace App\Listeners;

use App\Events\Customer_Contact_Me;
use App\Mail\Customer_Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class Customer_Contact_Email
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Customer_Contact_Me $event)
    {
        // info($event->user);
        Mail::to('portfolio_admin@gmail.com')
            ->send(new Customer_Mail($event->user));
    }
}
