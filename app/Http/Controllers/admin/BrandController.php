<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::orderBy('id', 'DESC')->get();
        return view('admin.brand.index')->with('brands', $brands);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request ->validate(
            [ 
                'name'=>'required|unique:brand|max:255',
                'description'=>'required|unique:brand',
                'is_active'=>'required',
            ],  
            [ 
                'name.required'=>'Tên brand phải có',
            ],
        );
            $brand = new Brand();
            $brand->name = $data['name'];
            $brand->description = $data['description'];
            $brand->is_active = $data['is_active'];
            $brand->save();
            return redirect()->back()->with('status','Thêm thương thiệu thành công');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brand=Brand::find($id);
        return view('admin.brand.edit')->with(compact('brand'));
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
            $brand =  Brand::find($id);
            $brand->name = $data['name'];
            $brand->description = $data['description'];
            $brand->is_active = $data['is_active'];
            $brand->save();
            return redirect()->back()->with('status','Cập nhật thương thiệu thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Brand::find($id)->delete();
        return redirect()->back()->with('status','Xóa thương thiệu thành công');
    }
}
