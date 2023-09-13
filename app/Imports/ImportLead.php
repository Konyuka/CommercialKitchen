<?php

namespace App\Imports;

use App\Models\Lead;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;





class ImportLead implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        return new Lead([
            'lead_id' => $row[0],
            'created_time' => $row[1],
            'ad_id' => $row[2],
            'ad_name' => $row[3],
            'adset_id' => $row[4],
            'adset_name' => $row[5],
            'campaign_id' => $row[6],
            'campaign_name' => $row[7],
            'form_id' => $row[8],
            'form_name' => $row[9],
            'is_organic' => $row[10],
            'platform' => $row[11],
            'how_soon' => $row[12],
            'full_name' => $row[13],
            'phone_number' => $row[14],
            'email' => $row[15]
        ]);

    }

    public function startRow(): int
    {
        return 2;
    }

}