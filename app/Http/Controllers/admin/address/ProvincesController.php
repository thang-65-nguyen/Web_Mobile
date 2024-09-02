<?php

namespace App\Http\Controllers\admin\address;
use App\Http\Controllers\Controller;
use App\Models\Provinces;
use Illuminate\Http\Request;
class ProvincesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provinces = Provinces::orderBy('id', 'desc')->paginate(5);
        return view('admin.provinces.index')->with('provinces', $provinces);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.provinces.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request ->validate(
            [ 
                'name'=>'required|unique:provinces|max:255',
                'is_active'=>'required',
            ],  
            [ 
                'name.required'=>'Tên tỉnh phải có',
            ],
        );
            $provinces = new Provinces();
            $provinces->name = $data['name'];
            $provinces->is_active = $data['is_active'];
            $provinces->save();
            return redirect()->back()->with('status','Thêm tỉnh thành công');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $provinces=Provinces::find($id);
        return view('admin.provinces.edit')->with(compact('provinces'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request ->validate(
            [ 
                'name'=>'required|max:255',
                'is_active'=>'required',
            ],  
            [ 
                'name.required'=>'Tên tỉnh phải có',
            ],
        );
            $provinces =  Provinces::find($id);
            $provinces->name = $data['name'];
            $provinces->is_active = $data['is_active'];
            $provinces->save();
            return redirect()->back()->with('status','Cập nhật tỉnh thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Provinces::find($id)->delete();
        return redirect()->back()->with('status','Xóa tỉnh thành công');
    }
}
