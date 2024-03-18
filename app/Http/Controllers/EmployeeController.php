<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){

        $employees= Employee::all();
        return view('employees.index',['employees'=>$employees]);
         
    }


    public function create(){
        return view('employees.create');
    }


    public function store(Request $request){
        $data = $request->validate([
          
            'name'=>'required|string',
            'Dept'=>'required|string',
            'code'=>'required|numeric',
            'description'=>'required|string',
            'salary'=>'required|numeric'


        ]);

        $newEmployee = Employee::create($data);

        return redirect(route('employees.index'));
             
    }
     
    public function edit(Employee $employee){
        return view('employees.edit',['employee'=>$employee]);
    }

    public function update(Employee $employee, Request $request){
        $data = $request->validate([
          
            'name'=>'required|string',
            'Dept'=>'required|string',
            'code'=>'required|numeric',
            'description'=>'required|string',
            'salary'=>'required|numeric'


        ]);

        $employee->update($data);
        return redirect(route('employees.index'))-> with('success','Employee updated');
    }


    public function destroy(Employee $employee){
        $employee->delete();
        return redirect(route('employees.index'))-> with('success','Employee  Deleted');
    }




}
