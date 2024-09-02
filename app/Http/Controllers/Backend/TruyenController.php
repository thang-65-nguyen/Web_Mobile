<?php


namespace App\Http\Controllers\Backend;
use App\Models\Truyen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TruyenController extends Controller
{
    public function create()
    {
        return view('backend.truyen.create');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'status' => 'required|boolean',
            'view' => 'nullable|integer',
            'like' => 'nullable|integer',
            'follow' => 'nullable|integer',
            'slug' => 'required|string|unique:truyen,slug',
            'hot' => 'nullable|boolean',
            'outstanding' => 'nullable|boolean',
            'description' => 'nullable|string',
            'img.*' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Định dạng hình ảnh và kích thước tối đa
        ]);

        // Lưu truyện mới
        $data = $request->except('img');
         // Xử lý hình ảnh
        if ($request->hasFile('img')) {
            $images = $request->file('img');
            $imagePaths = [];
        
            foreach ($images as $image) {
                $path = $image->store('images/truyen', 'public');
                $imagePaths[] = $path;
            }
        
            $data['img'] = json_encode($imagePaths); // Lưu đường dẫn hình ảnh dưới dạng JSON
        } else {
            $data['img'] = ''; // Đảm bảo giá trị mặc định
        }


        return redirect()->route('backend.truyen.create')->with('success', 'Truyện đã được tạo thành công!');
    }
}
?>