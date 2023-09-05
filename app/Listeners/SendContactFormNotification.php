<?php

namespace App\Listeners;

use App\Events\ContactFormCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\ContactFormNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


class SendContactFormNotification
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
    public function handle(ContactFormCreated $event): void
    {
        $contactForm = $event->contactForm;
        Log::info($event);
        Mail::to('michaelsaiba84@gmail.com')->send(new ContactFormNotification($contactForm));
    }
}
