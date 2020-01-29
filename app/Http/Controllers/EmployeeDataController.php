<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees;

class EmployeeDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employees::all();
        return view('employees.index') ->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'idnumber' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'position' => 'required',
            'yearsActive' => 'required',
            'salary' => 'required',
            'currentStatus' => 'required'
        ]);
        $employee = new Employees;
        $employee-> name = $request -> input('name');
        $employee-> surname = $request -> input('surname');
        $employee-> idnumber = $request -> input('idnumber');
        $employee-> dob = $request -> input('dob');
        $employee-> gender = $request -> input('gender');
        $employee-> address = $request -> input('address');
        $employee-> position = $request -> input('position');
        $employee-> yearsActive = $request -> input('yearsActive');
        $employee-> salary = $request -> input('salary');
        $employee-> currentStatus = $request -> input('currentStatus');
        $employee-> user_id = auth() -> user() -> id;

        $employee->save();

        return redirect('/employees')->with('success', 'User Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employees::find($id);
        return view('employees.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employee = Employees::find($id);
        return view('employees.edit')->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'idnumber' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'position' => 'required',
            'yearsActive' => 'required',
            'salary' => 'required',
            'currentStatus' => 'required'
        ]);
        $employee = Employees::find($id);
        $employee-> name = $request -> input('name');
        $employee-> surname = $request -> input('surname');
        $employee-> idnumber = $request -> input('idnumber');
        $employee-> dob = $request -> input('dob');
        $employee-> gender = $request -> input('gender');
        $employee-> address = $request -> input('address');
        $employee-> position = $request -> input('position');
        $employee-> yearsActive = $request -> input('yearsActive');
        $employee-> salary = $request -> input('salary');
        $employee-> currentStatus = $request -> input('currentStatus');
        
        $employee->save();

        return redirect('/employees')->with('success', 'User Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $employee = Employees::find($id);
        $employee->delete();
        return redirect('/employees')->with('success', 'User Removed');

    }
}
