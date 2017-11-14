<?php

namespace App\Listeners;

use App\Events\NewUSer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewUserWelcome;

class SendWelcomeEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewUSer  $event
     * @return void
     */
    public function handle(NewUser $event)
    {
        Mail::to($event->user->email)->send(new NewUserWelcome($event->user));
    }
}
