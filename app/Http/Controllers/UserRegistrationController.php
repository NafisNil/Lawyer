<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\District;
use Illuminate\Support\Str;
use Auth;
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
        $userCount = User::count();
        $email = $userCount;
        $mobile = "";
        if ($request->start == 'e') {
            # code...
            $email = $request->info;
        }else if($request->start == 'm') {
            # code...
            $mobile = $request->info;
        }
        //dd($request->all());
        $user = User::create([
            'email' => $email,
            'mobile' =>$mobile,
            'start' => $request->start
        ]);

      //  return response()->json($user, 201);
      return redirect()->route('user_main_registration_form')->with('success', 'Fill up the information!');

    }
    public function MainRegistrationForm(){
        $district = District::all();
        $user = User::latest()->first();
        return view('backend.user.main_reg', ['district' => $district, 'user'=> $user]);
    }

    public function MainRegistration(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'fathers_name' => 'required',
            'mothers_name' => 'required',
            'nid' => 'required|min:9',
            'dob' => 'required',
            'gender' => 'required',
            'district_id' => 'required',
            'thana' => 'required',
            'address' => 'required',
            'password' => 'required|min:8',
        ]);

        $user = User::latest()->first();
        $user->update($request->all());
        return redirect()->route('dashboard'); 
    }

    public function edit_info(){
        $user = User::find(Auth::user()->id);
        $district = District::all();
        return view('backend.user.edit', ['user' => $user, 'district' => $district]);
    }
}
