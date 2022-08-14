<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\CsvImport;

use Maatwebsite\Excel\Facades\Excel;

use App\Records;

class CsvFile extends Controller
{
    public function csv_import(){
        Excel::import(new CsvImport, request()->file('file'));
        return redirect()->back()->with('message', 'File uploaded Successfully');
    }
}

