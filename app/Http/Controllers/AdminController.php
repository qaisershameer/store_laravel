<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;

class AdminController extends Controller
{

    //////////////////// CATEGORY TABLE CRUD ////////////////////

    public function view_category()
    {
        $data = Category::orderBy('category_name')->get();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data = new Category;

        $data->category_name = $request->category_name;

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

        $data->category_name = $request->category_name;

        $data->save();

        toastr()->timeOut(2000)->closeButton()->addSuccess('Category Updated Successfully.');

        return redirect('/view_category');

    }

    //////////////////// PRODUCT TABLE CRUD ////////////////////
    
    public function view_product()
    {
        $data = Product::orderBy('product_name')->get();
        return view('admin.view_product', compact('data'));
    }

    public function add_product(Request $request)
    {
        $category = Category::orderBy('category_name')->get();                
        return view('admin.add_product', compact('category'));   
    }
    
    public function upload_product(Request $request)
    {
        
        $data = new Product;

        $data->product_name = $request->product_name;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->qty = $request->qty;
        $data->category_Id = $request->category_Id;

        $data->save();

        toastr()->timeOut(2000)->closeButton()->addSuccess('Product Added Successfully.');

        return redirect()->back();
        // return redirect('admin.view_product');
    }

}
