<?php

namespace App\Http\Controllers;

use App\School;
use Log;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //
    }

public function regStore(Request $request)
{
  Log::info($request);
  $school = new School() ;
  $school->s_name = $request->get('name');
  $school->s_dob = $request->get('dob');
  $school->s_fname = $request->get('fname');
  $school->s_mname = $request->get('mname');
  $school->s_caste = $request->get('caste');
  $school->s_aadhar = $request->get('aadhar');
  $school->s_phone = $request->get('phone');
  $school->s_address = $request->get('address');
  $school->s_gender = $request->get('gender');
  $school->s_class = $request->get('class');
  $school->save();
  return redirect('/Schools');
}

  public function reg(Request $request)
{
  return view('reg');
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Schools.create');
    }

    /**
     * Store a newly created resource in storage.     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          $school = new school() ;
          $school->s_name = $request->get('name');
          $school->s_dob = $request->get('dob');
          $school->s_fname = $request->get('fname');
          $school->s_mname = $request->get('mname');
          $school->s_caste = $request->get('caste');
          $school->s_phone = $request->get('phone');
          $school->s_address = $request->get('address');
          $school->s_gender = $request->get('gender');
          $school->save();
          return redirect('/Schools');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        return view('Schools.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, school $school)
    {

          $school = new school() ;
          $school->s_name = $request->get('name');
          $school->s_dob = $request->get('dob');
          $school->s_fname = $request->get('fname');
          $school->s_mname = $request->get('mname');
          $school->s_caste = $request->get('caste');
          $school->s_phone = $request->get('phone');
          $school->s_address = $request->get('address');
          $school->s_gender = $request->get('gender');
          $school->save();
          return redirect('/Schools')->with('Details Added Successfully');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }
}
