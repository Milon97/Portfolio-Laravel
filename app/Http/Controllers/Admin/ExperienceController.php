<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;
use Toastr;

class ExperienceController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:experience-list|experience-create|experience-edit|experience-delete', ['only' => ['index','store']]);
         $this->middleware('permission:experience-create', ['only' => ['create','store']]);
         $this->middleware('permission:experience-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:experience-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $show_data = Experience::orderBy('id','DESC')->get();
        return view('backEnd.experience.index',compact('show_data'));
    }
    public function create()
    {
        return view('backEnd.experience.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'status' => 'required',
        ]);
        $input = $request->all();
        Experience::create($input);
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('experience.index');
    }
    
    public function edit($id)
    {
        $edit_data = Experience::find($id);
        return view('backEnd.experience.edit',compact('edit_data'));
    }
    
    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);
        $update_data = Experience::find($request->id);
        $input = $request->all();
        $update_data->update($input);

        Toastr::success('Success','Data update successfully');
        return redirect()->route('experience.index');
    }
 
    public function inactive(Request $request)
    {
        $inactive = Experience::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = Experience::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = Experience::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}
