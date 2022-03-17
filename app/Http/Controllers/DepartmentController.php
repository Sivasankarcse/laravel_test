<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $department = Department::all();
        return view('pages.department.index', compact('department'));
    }

    public function create()
    {
        return view('pages.department.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $department = Validator::make($input, [
            'department_name' => 'required',
            'department_code' => 'required',
        ]);

        if(!$department->fails())
        {
            $departmentSave = Department::create($input);
        }

        return redirect('department')->with('success', 'Department Created Successfully');
    }

    public function edit($id)
    {
        $departmentDetails = Department::findOrFail($id);
        return view('pages.department.edit', compact('departmentDetails'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        $department = Validator::make($input, [
            'department_name' => 'required',
            'department_code' => 'required',
        ]);

        if(!$department->fails())
        {
            $departmentUpdate = Department::findOrFail($id);
            $departmentUpdate->department_name = $request['department_name'];
            $departmentUpdate->department_code = $request['department_code'];
            $departmentUpdate->save();
        }

        return redirect('department')->with('success', 'Department Updated Successfully');
    }

    public function destroy($id)
    {
        $destroyDepartment = Department::findOrFail($id);
        $destroyDepartment->delete();
        
        return redirect('department')->with('success', 'Department Deleted Successfully');
    }
}
