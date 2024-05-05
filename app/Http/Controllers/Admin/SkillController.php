<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use Toastr;

class SkillController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:skill-list|skill-create|skill-edit|skill-delete', ['only' => ['index','store']]);
         $this->middleware('permission:skill-create', ['only' => ['create','store']]);
         $this->middleware('permission:skill-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:skill-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $show_data = Skill::orderBy('id','DESC')->get();
        return view('backEnd.skill.index',compact('show_data'));
    }
    public function create()
    {
        return view('backEnd.skill.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required',
        ]);
        $input = $request->all();
        Skill::create($input);
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('skill.index');
    }
    
    public function edit($id)
    {
        $edit_data = Skill::find($id);
        return view('backEnd.skill.edit',compact('edit_data'));
    }
    
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $update_data = Skill::find($request->id);
        $input = $request->all();
        $update_data->update($input);

        Toastr::success('Success','Data update successfully');
        return redirect()->route('skill.index');
    }
 
    public function inactive(Request $request)
    {
        $inactive = Skill::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = Skill::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = Skill::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}
