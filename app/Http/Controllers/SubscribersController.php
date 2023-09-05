<?php

namespace App\Http\Controllers;

use App\Models\Subscribers;
use Illuminate\Http\Request;
use App\Models\Subscriber; // Import the Subscriber model


class SubscribersController extends Controller
{
    public function saveSubscriber(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|unique:subscribers|email'
        ]);

        Subscribers::create([
            'email' => $validated['email']
        ]);

        return back()->with('message', 'You have subscribed successfully');

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
    public function show(Subscribers $subscribers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscribers $subscribers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscribers $subscribers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscribers $subscribers)
    {
        //
    }
}
