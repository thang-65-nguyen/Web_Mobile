<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(5);
        return view('admin.category.index')->with('categories', $categories);
    }
    public function show()
    {
        $categories = Category::where('is_active', 0)->orderBy('id', 'DESC')->get();
        return view('partials.banners')->with('categories', $categories);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request ->validate(
            [ 
                'name'=>'required|unique:category|max:255',
                'description'=>'required|unique:category|max:255',
                'is_active'=>'required',
            ],  
            [ 
                'name.required'=>'Tên brand phải có',
            ],
        );
            $category = new Category();
            $category->name = $data['name'];
            $category->description = $data['description'];
            $category->is_active = $data['is_active'];
            $category->save();
            return redirect()->back()->with('status','Thêm thể loại thành công');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category=Category::find($id);
        return view('admin.category.edit')->with(compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request ->validate(
            [ 
                'name'=>'required|max:255',
                'description'=>'required|max:255',
                'is_active'=>'required',
            ],  
            [ 
                'name.required'=>'Tên brand phải có',
            ],
        );
            $category =  Category::find($id);
            $category->name = $data['name'];
            $category->description = $data['description'];
            $category->is_active = $data['is_active'];
            $category->save();
            return redirect()->back()->with('status','Cập nhật thể loại thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::find($id)->delete();
        return redirect()->back()->with('status','Xóa thể loại thành công');
    }
}
