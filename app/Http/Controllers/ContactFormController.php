<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use App\Events\ContactFormCreated;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormNotification;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required',
            'email' => 'email',
        ]);

        $contactForm = ContactForm::create([
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'number' => $validated['number'],
            'email' => $validated['email'],
            'message' => $request['message'],
        ]);

        // event(new ContactFormCreated($contactForm));
        // ContactFormCreated::dispatch($contactForm);
        Mail::to('michaelsaiba84@gmail.com')->send(new ContactFormNotification($contactForm));

        return back()->with('message', 'We will reach out in a few');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
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
    public function show(ContactForm $contactForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactForm $contactForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactForm $contactForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactForm $contactForm)
    {
        //
    }
}
