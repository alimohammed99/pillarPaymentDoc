<?php

namespace App\Imports;

use App\Records;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CsvImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Records([
            'date' => $row["date"],
            'quarter' => $row["quarter"],
            'starting_point' => $row["starting_point"],
            'end_point' => $row["end_point"],
            'surcon_number' => $row["surcon_number"],
            'name' => $row["name"],
            'status' => $row["status"],
            'no_of_pillars' => $row["no_of_pillars"],
            'plan_number' => $row["plan_number"],
            'location' => $row["location"],
            'lga' => $row["lga"],
            'amount' => $row["amount"],
            'type' => $row["type"],
            'payment_mode' => $row["payment_mode"],
        ]);
    }
}
