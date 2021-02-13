<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\survey;
class surveycontroller extends Controller
{
public function insert(Request $request){
 //dd($request);

	$item = new survey;
	$item->Name= $request->input('name');
	$item->mobile=$request->input('mobile');
	$item->emailid=$request->input('emailid');
	$item->age=$request->input('age');
	$item->gender=$request->input('gender');
	$item->city=$request->input('city');
	$item->income=$request->input('income');
	$item->familymember=$request->input('familymember');


	$item->save();

         
	if( $item->save()){
		return [
	'status'=>true, ];
	}
	else{
		return[
	'status'=>false, ];
	}
}

public function show(){
      $show = survey::all();
      return response()->json($show);

}

}
