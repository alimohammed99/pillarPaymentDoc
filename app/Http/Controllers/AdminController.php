<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Principals;

use App\Records;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function add_surveyors(){
        return view('admin.add_surveyors');
    }




    public function upload_surveyors(Request $request){

        $data = new principals;

        $data->surcon_number = $request->surcon;

        $data->name = $request->name;

        $data->status = $request->status;



        $data->save();


        return redirect()->back()->with('message', 'Registration successful');
    }




    public function view_surveyors(){

        $data = principals::all(); 
        return view('admin.view_surveyors', compact('data'));
    
    }



    public function edit_surveyors($id){
        $data = principals::find($id);
        return view('admin.edit_surveyors', compact('data'));
    }



    public function delete_surveyors($id){
        $data = principals::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Principal Deleted Successfully');
    }




    public function update_surveyors(Request $request, $id){
         
        $data = principals::find($id);


        $data->surcon_number = $request->surcon;

        $data->name = $request->name;

        $data->status = $request->status;

        $data->save();

        return redirect()->back()->with('message', 'Principal has been updated');
         
    }



    public function add_records(){
        return view('admin.add_records');
    }



    public function upload_records(Request $request){
         
        $data = new records;

        $data->date = $request->date;

        $data->quarter = $request->quarter;

        $data->starting_point = $request->starting_point;

        $data->end_point = $request->end_point;

        $data->surcon_number = $request->surcon_number;

        $data->name = $request->name;

        $data->status = $request->status;

        $data->no_of_pillars = $request->no_of_pillars;

        $data->plan_number = $request->plan_number;

        $data->location = $request->location;

        $data->lga = $request->lga;

        $data->amount = $request->amount;

        $data->type = $request->type;

        $data->payment_mode = $request->payment_mode;



        $data->save();


        return redirect()->back()->with('message', 'Record uploaded successfully');
         
    }





    public function view_records(){

        
       $data = principals::all();
    
       $overallPillarsByEverybody = DB::table('records')->sum('no_of_pillars');
       $overallamountByEverybody = DB::table('records')->sum('amount');
       
        return view('admin.view_records', compact('data', 'overallPillarsByEverybody', 'overallamountByEverybody'));
    
}








}
