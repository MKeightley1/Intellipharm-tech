<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index()
    {
		$records = Record::all();
		return response()->json($records);
    }
	
	public function create(Request $request)
	{
		$record = new Record;
		$record->firstname= $request->firstname;
		$record->surname = $request->surname;
		$record->email= $request->email;

		$record->save();
		return response()->json($record);
	} 
	
	  public function show(Request $request)
     {
		$records = Record::all();
		
		if ($request->has('firstname') ) {
			$records = $records->whereIn('firstname' , $request->firstname);
		}
		if ($request->has('surname') ) {
			$records = $records->whereIn('surname' , $request->surname);
		}
		if ($request->has('email') ) {
			$records = $records->whereIn('email' , $request->email);
		}
		
		return response()->json($records);
     }
}
