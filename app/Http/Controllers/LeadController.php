<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportLead;
use Illuminate\Support\Facades\DB;


class LeadController extends Controller
{
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
    public function importLeads(Request $request)
    {

        // $file = $request->file();
        // dd($file);

        Excel::import(new ImportLead, $request->file('file')->store('files'));

        $duplicateLeads = Lead::select('lead_id')
            ->groupBy('lead_id')
            ->havingRaw('COUNT(*) > 1')
            ->pluck('lead_id');

        foreach ($duplicateLeads as $duplicateLead) {
            $leadId = $duplicateLead;
            $duplicates = Lead::where('lead_id', $leadId)->get();

            $duplicates->shift();
            foreach ($duplicates as $duplicate) {
                $duplicate->delete();
            }
        }
        DB::statement('OPTIMIZE TABLE leads');   
        return back()->with('message', 'Leads imported succesfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Lead $lead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lead $lead)
    {
        //
    }
}