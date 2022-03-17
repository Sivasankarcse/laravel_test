<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qualification;
use Validator;

class QualificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $qualification = Qualification::all();
        return view('pages.qualification.index', compact('qualification'));
    }

    public function create()
    {
        return view('pages.qualification.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $qualification = Validator::make($input, [
            'qualification_name' => 'required',
            'qualification_code' => 'required',
        ]);

        if(!$qualification->fails())
        {
            $qualificationSave = Qualification::create($input);
        }

        return redirect('qualification')->with('success', 'Qualification Stored Successfully');
    }

    public function edit($id)
    {
        $qualificationDetails = Qualification::findOrFail($id);
        return view('pages.qualification.edit', compact('qualificationDetails'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        $qualification = Validator::make($input, [
            'qualification_name' => 'required',
            'qualification_code' => 'required',
        ]);

        if(!$qualification->fails())
        {
            $qualificationUpdate = Qualification::findOrFail($id);
            $qualificationUpdate->qualification_name = $request['qualification_name'];
            $qualificationUpdate->qualification_code = $request['qualification_code'];
            $qualificationUpdate->save();
        }

        return redirect('qualification')->with('success', 'Qualification Updated Successfully');
    }

    public function destroy($id)
    {
        $destroyQualification = Qualification::findOrFail($id);
        $destroyQualification->delete();
        
        return redirect('qualification')->with('success', 'Qualification Deleted Successfully');
    }
}
