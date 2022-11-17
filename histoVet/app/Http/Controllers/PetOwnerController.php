<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetOwner;
use Exception;

class PetOwnerController extends Controller
{
    public function index(){
        return response()->json(PetOwner::all(),200);
    }
 
    public function show($id){
        $the_user=PetOwner::find($id);
        if(is_null($the_user)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            return response()->json($the_user::find($id),200);
        }
    }
    public function store(Request $request){
        try {
            $data = $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required|email',
                'address' => 'required',
                'role_id' => 'required'
            ]);
            // $data['password'] = bcrypt($request->password);
            $user = PetOwner::create($data);
            // $token = $user->createToken('API Token')->accessToken; //se puede comentar
            // return response(['user' => $user, 'token' => $token]);
        } catch (Exception $e) {
            return response(['data' => "Data incomplete "],400);
        }

    }
 
    public function update(Request $request,$id){
        $the_user=PetOwner::find($id);
        if(is_null($the_user)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            $the_user->update($request->all());
            return response()->json($the_user::find($id),200);
        }
    }
    public function destroy(Request $request,$id){
        $the_user=PetOwner::find($id);
        if(is_null($the_user)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            $the_user->delete();
            return response()->json(null,204);
        }
    }
}