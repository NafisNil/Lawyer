<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\District;
use App\Models\Type;
use Illuminate\Support\Str;
use Auth;
class LawyerController extends Controller
{
    //
    public function registration(){
        $type = Type::all();
        return view('backend.lawyer.lawyer_registration_form', ['type' => $type]);
    }

    public function registrationStore(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'mobile' => 'required|numeric',
            'email' => 'required|email',
            'nid' => 'required|min:9',
            'court' => 'required',
            'experience' => 'required',
            'type_id' => 'required',
            
        ]);
        $input  = $request->all();
        $type_id = $input['type_id'];
        $input['type_id'] = implode(',', $type_id);
        $user = User::create($input);
        return "success";
    }
}
