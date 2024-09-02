<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'DESC')->get();
        return view('admin.blog.index')->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }
    public function showBlogs()
    {
        // Lấy tất cả các bài viết từ cơ sở dữ liệu và sắp xếp chúng theo ngày tạo mới nhất
        $blogs = Blog::where('is_active', 0)->orderBy('created_at', 'DESC')->get();
    
        // Trả về view và truyền dữ liệu bài viết qua view
        return view('pages.blog')->with('blogs', $blogs);
    }
    public function show($id)
    {
        // Tìm bài viết theo ID, nếu không tìm thấy thì trả về lỗi 404
        $blog = Blog::findOrFail($id);
        
        // Trả về view 'blog.show' với biến blog
        return view('pages.blog.show', compact('blog'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request ->validate(
            [ 
                'title'=>'required|unique:blog',
                'image'=>'required',
                'content'=>'required',
                'is_active'=>'required',
                'author'=>'required',
                'is_featured'=>'required',
                'is_promotion'=>'required'
            ],  
            [ 
                'name.required'=>'Tên bài viết phải có',
            ],
        );
            $blog = new Blog();
            $blog->title = $data['title'];
            $blog->image = $data['image'];
            $blog->content = $data['content'];
            $blog->is_active = $data['is_active'];
            $blog->author=$data['author'];
            $blog->is_featured=$data['is_featured'];
            $blog->is_promotion=$data['is_promotion'];
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->file('image')->extension();
                $request->file('image')->storeAs('public/images', $imageName);
                $blog->image = 'images/' . $imageName;
            }
            $blog->save();
            return redirect()->back()->with('status','Thêm bài viết thành công');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog=Blog::find($id);
        return view('admin.blog.edit')->with(compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request ->validate(
            [ 
                'title' => 'required',
                'content' => 'required',
                'is_active' => 'required',
                'author'=>'required',
                'is_featured'=>'required',
                'is_promotion'=>'required'
            ],  
            [ 
                'title.required' => 'Tiêu đề bài viết phải có',
                'content.required' => 'Nội dung bài viết phải có',
                'is_active.required' => 'Trạng thái kích hoạt phải có',
            ],
        );
        
        $blog = Blog::find($id);
        $blog->title = $data['title'];
        $blog->content = $data['content'];
        $blog->is_active = $data['is_active'];
        $blog->author=$data['author'];
        $blog->is_featured=$data['is_featured'];
        $blog->is_promotion=$data['is_promotion'];
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/images', $imageName);
            $blog->image = 'images/' . $imageName;
        }
        
        $blog->save();
        return redirect()->back()->with('status', 'Sửa bài viết thành công');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::find($id)->delete();
        return redirect()->back()->with('status','Xóa bài viết thành công');
    }
}
