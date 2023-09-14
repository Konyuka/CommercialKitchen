<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportLead;
use Illuminate\Support\Facades\DB;


class LeadController extends Controller
{
    public function importLeads(Request $request)
    {

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

    
    public function saveConvo(Request $request, $id)
    {
        $lead = Lead::where('id', $id)->first();

        $newNotesArray = [];
        $exisitingNotes = json_decode($lead->notes);
        array_push($newNotesArray, $exisitingNotes);
        $newNotes = $request->notes;
        $json = json_encode($newNotes);
        $noteObject = json_decode($json);
        array_push($newNotesArray, $noteObject);

        $lead->notes = $newNotesArray;
        $lead->call_date = $request->call_date;
        $lead->save();
        
        return back()->with('message', 'Conversation notes logged successfully');
    }

}