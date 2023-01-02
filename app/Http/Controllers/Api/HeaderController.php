<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;


use App\Models\HeaderSection;
use App\Models\addmission;
use Illuminate\Http\Request;
use Exception;

class HeaderController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function header()
    {
        $data= HeaderSection::get();
        return $data;
    }

    public function save(Request $request)
    {
   
        try {
            if(addmission::where('contact',$request->phone_number)->where('father_nid',$request->nid_number)->exists()){
                return response()->json(array('This mobile number and nid is already used.'), 201);
            }
            $regi = new addmission();
            $regi->name = $request->name;
            $regi->birth_date = $request->birth_date;
            $regi->birth_certificate_no = $request->birth_certificate_no;
            $regi->contact = $request->contact;
            $regi->email = $request->email;
            $regi->father = $request->father;
            $regi->father_nid = $request->father_nid;
            $regi->mother = $request->mother;
            if ($regi->save()) {
                //return response()->json($regi, 201);
                return response()->json(array('Registration Success'), 201);
            }
        } catch (Exception $e) {
            return response()->json(array('error'=>"Please try again"), 201);
        }
    }
}