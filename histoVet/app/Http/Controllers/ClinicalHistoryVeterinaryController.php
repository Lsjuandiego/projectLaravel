<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClinicalHistoryVeterinary;

class ClinicalHistoryVeterinaryController extends Controller
{
    public function index(){ //listar todos los elementos almacenados en esa tabla
        return response()->json(ClinicalHistoryVeterinary::all(),200); //Permission es el modelo. 200: es el OK
    }

    public function show($id){
        $the_permission = ClinicalHistoryVeterinary::find($id);
        if(is_null($the_permission)){
            return response()->json(['message'=>'Not Found'],404);
        }
        else{
            $the_permission->roles;
            return response()->json($the_permission::find($id),200);
        }
    }

    public function store(Request $request){
        $the_permission=ClinicalHistoryVeterinary::create($request->all());
        return response($the_permission,201);
    }

    public function update(Request $request,$id){
        $the_permission=ClinicalHistoryVeterinary::find($id);
        if(is_null($the_permission)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            $the_permission->update($request->all());
            return response()->json($the_permission::find($id),200);
        }
    }
    public function destroy(Request $request,$id){
        $the_permission=ClinicalHistoryVeterinary::find($id);
        
        if(is_null($the_permission)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            $the_permission->delete();
            return response()->json(null,204);
        }
    }
}
