<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserRegistrationController extends Controller
{
    //
    public function InitialRegistrationForm(){
        return view('backend.user.initialreg');
    }
    public function InitialRegistration(Request $request){

        $validated = $request->validate([
            'info' => 'required',
            'start' => 'required',
        ]);
        if ($request->start == 'e') {
            # code...
            $email = $request->info;
        }else if($request->start == 'm') {
            # code...
            $mobile = $request->info;
        }
        dd($request->all());
        $user = User::create([
            'email' => $request->email,
            'mobile' => $request->phone,
            'start' => $request->start
        ]);

      //  return response()->json($user, 201);

    }
}
