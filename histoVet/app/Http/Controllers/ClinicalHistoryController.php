<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClinicalHistory;
use Exception;

class ClinicalHistoryController extends Controller
{
    public function index(){
        return response()->json(ClinicalHistory::all(),200);
    }
 
    public function show($id){
        $the_user=ClinicalHistory::find($id);
        if(is_null($the_user)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            return response()->json($the_user::find($id),200);
        }
    }
    public function store(Request $request){
        $the_permission=ClinicalHistory::create($request->all());
        return response($the_permission,201);
    }
 
    public function update(Request $request,$id){
        $the_user=ClinicalHistory::find($id);
        if(is_null($the_user)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            $the_user->update($request->all());
            return response()->json($the_user::find($id),200);
        }
    }
    // public function destroy(Request $request,$id){
    //     $the_user=ClinicalHistory::find($id);
    //     if(is_null($the_user)){
    //         return response()->json(['message'=>'Not found'],404);
    //     }else{
    //         $the_user->delete();
    //         return response()->json(null,204);
    //     }
    // }
}