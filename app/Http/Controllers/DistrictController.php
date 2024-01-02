<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use App\Http\Requests\DistrictRequest;
class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $district = District::orderBy('id', 'desc')->get();
        $districtCount = District::count();
         return view('backend.district.index',['district'=>$district,'districtCount'=> $districtCount,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.district.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DistrictRequest $request)
    {
        //
        $district = District::create($request->all());

        return redirect()->route('district.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(District $district)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(District $district)
    {
        //
        return view('backend.district.edit',[
            'edit' => $district
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DistrictRequest $request, District $district)
    {
        //
        $district->update($request->all());
       
        return redirect()->route('district.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(District $district)
    {
        //
        $district->delete();
        return redirect()->route('district.index')->with('status','Data deleted successfully!');
    }
}
