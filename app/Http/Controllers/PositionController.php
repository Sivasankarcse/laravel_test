<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Position;

class PositionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $position = Position::all();
        return view('pages.position.index', compact('position'));
    }

    public function create()
    {
        return view('pages.position.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $department = Validator::make($input, [
            'position_name' => 'required',
            'position_code' => 'required',
        ]);

        if(!$department->fails())
        {
            $departmentSave = Position::create($input);
        }

        return redirect('position')->with('success', 'Position Stored Successfully');
    }
    
    public function edit($id)
    {
        $positionDetails = Position::findOrFail($id);
        return view('pages.position.edit', compact('positionDetails'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        $position = Validator::make($input, [
            'position_name' => 'required',
            'position_code' => 'required',
        ]);

        if(!$position->fails())
        {
            $positionUpdate = Position::findOrFail($id);
            $positionUpdate->position_name = $request['position_name'];
            $positionUpdate->position_code = $request['position_code'];
            $positionUpdate->save();
        }

        return redirect('position')->with('success', 'Position Updated Successfully');
    }

    public function destroy($id)
    {
        $destroyPosition = Position::findOrFail($id);
        $destroyPosition->delete();
        
        return redirect('position')->with('success', 'Position Deleted Successfully');
    }
}
