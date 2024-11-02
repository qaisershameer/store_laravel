<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data = new Category;

        $data->category_name = $request->category;

        $data->save();

        toastr()->timeOut(2000)->closeButton()->addSuccess('Category Added Successfully.');

        return redirect()->back();
    }

    public function delete_category($id)    
    {
        $data = Category::find($id);

        $data->delete();

        toastr()->timeOut(2000)->closeButton()->addSuccess('Selected Category Deleted Successfully.');

        return redirect()->back();

    }

    public function edit_category($id)    
    {        

        $data = Category::find($id);

        return view('admin.edit_category', compact('data'));
        
    }

    public function update_category(Request $request, $id)    
    {        

        $data = Category::find($id);

        $data->category_name = $request->category;

        $data->save();

        toastr()->timeOut(2000)->closeButton()->addSuccess('Category Updated Successfully.');

        return redirect('/view_category');

    }

}
