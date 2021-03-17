<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\survey;
use App\model\product;
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

   public function productinfo(){
      $show = product::all();
      return response()->json($show);
   }


   public function productinsert(Request $request){
	    dd($request);

        $item = new product;
        $item->q1=$request->input('q1');
        $item->q2=$request->input('q2');
        $item->q3=implode(',',$request->input('q3'));
        $item->business_info=$request->input('business_info');



        $item->save();
	dd($item);


        if( $item->save()){
                return [
        'status'=>true, ];
        }
        else{
                return[
        'status'=>false, ];
        }
}

}

