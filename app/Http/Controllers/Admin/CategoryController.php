<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Toastr;
use Image;
use File;

class CategoryController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:category-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:category-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $show_data = Category::orderBy('id', 'DESC')->get();
        return view('backEnd.category.index', compact('show_data'));
    }
    public function create()
    {
        return view('backEnd.category.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required',
            'status' => 'required',
        ]);
        

        $input = $request->all();
        
        $input['slug'] = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '', preg_replace('/\s+/', '-', $request->category_name)));

        Category::create($input);
        Toastr::success('Success', 'Data insert successfully');
        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $edit_data = Category::find($id);
        return view('backEnd.category.edit', compact('edit_data'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required',
            'status' => 'required',
        ]);
        $update_data = Category::find($request->hidden_id);

        $input = $request->all();
       
        $input['status'] = $request->status?1:0;
        $input['slug'] = preg_replace('/\s+/', '-', $request->category_name);
        // return $input;
        $update_data->update($input);

        Toastr::success('Success', 'Data update successfully');
        return redirect()->route('categories.index');
    }

    public function inactive(Request $request)
    {
        $inactive = Category::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success', 'Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = Category::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success', 'Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = Category::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success', 'Data delete successfully');
        return redirect()->back();
    }
}
