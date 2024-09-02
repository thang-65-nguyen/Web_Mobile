<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banners::orderBy('id', 'DESC')->get();
        return view('admin.banner.index')->with('banners', $banners);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [ 
                'title' => 'required|unique:banners|max:255',
                'image' => 'required',
                'link' => 'required',
                'description' => 'required',
                'position' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'is_active' => 'required',
            ],  
            [ 
                'title.required' => 'Tên banner phải có',
            ],
        );
    
       
        $banner = new Banners();
        $banner->title = $data['title'];
        $banner->image = $data['image'];
        $banner->link = $data['link'];
        $banner->description = $data['description'];
        $banner->position = $data['position'];
        $banner->start_date = $data['start_date'];
        $banner->end_date = $data['end_date'];
        $banner->is_active = $data['is_active'];
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/images', $imageName);
            $banner->image = 'images/' . $imageName;
        }        
        $banner->save();
        return redirect()->back()->with('success', 'Banner đã được thêm thành công!');
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner=Banners::find($id);
        return view('admin.banner.edit')->with(compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request ->validate(
            [ 
                'title'=>'required|max:255',
                'image' => 'nullable|image',
                'link'=>'required',
                'description'=>'required|max:255',
                'position'=>'required',
                'start_date'=>'required',
                'end_date'=>'required',
                'is_active'=>'required',
            ],  
            [ 
                'title.required'=>'Tên banner phải có',
            ],
        );
        $banner = Banners::find($id);
        $banner->title = $data['title'];
        $banner->link = $data['link'];
        $banner->description = $data['description'];
        $banner->position = $data['position'];
        $banner->start_date = $data['start_date'];
        $banner->end_date = $data['end_date'];
        $banner->is_active = $data['is_active']; 
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/images', $imageName);
            $banner->image = 'images/' . $imageName;
        }
        $banner->save();
        return redirect()->back()->with('status','Thêm banners thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Banners::find($id)->delete();
        return redirect()->back()->with('status','Xóa banners thành công');
    }
}
