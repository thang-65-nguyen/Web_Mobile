@extends('layouts.admin')
@section('title', 'Sửa Bài Viết ')
@section('content')
    <div class="px-4">
        <h2 class="text-2xl font-semibold leading-tight">Sửa Bài Viết</h2>
        <form method="POST" action="{{ route('blog.update',[$blog->id]) }}">
            @csrf
            @method('PUT') 
            <div class="my-4 flex gap-x-5">
                <div class="w-[650px] bg-white px-5 py-4 rounded-md" style="border-top:3px solid rgb(0, 115, 255)">
                    <div class="mb-4">
                        <label class="block mb-4 text-sm font-medium text-gray-700">Tiêu Đề<span class="text-red-500 ms-1">*</span></label>
                        <input type="text" name="title" value="{{ $blog->title }}" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]" required>
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block mb-4 text-sm font-medium text-gray-700">Tác giả<span class="text-red-500 ms-1">*</span></label>
                        <input type="text" name="author" value="{{ $blog->author }}" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]" required>
                        @error('author')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-4">Nội Dung<span class="text-red-500 ms-1">*</span></label>
                        <textarea name="content">{{ $blog->content }}</textarea>
                        @error('content')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kích hoạt</label>
                        <select name="is_active" id="is_active" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                            @if($blog->is_active==0)
                                <option value="0" selected>Kích hoạt</option>
                                <option value="1">Không kích hoạt</option>
                            
                            @else
                                <option value="0">Kích hoạt</option>
                                <option value="1" selected>Không kích hoạt</option>
                            
                            @endif
                        </select>
                        @error('is_active')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nổi bật</label>
                        <select name="is_featured" id="is_featured" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                            @if($blog->is_featured==0)
                                <option value="0" selected>Nổi bật</option>
                                <option value="1">Không nổi bật</option>
                            
                            @else
                                <option value="0">Nổi bật</option>
                                <option value="1" selected>Không nổi bật</option>
                            
                            @endif
                        </select>
                        @error('is_featured')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Khuyến mãi</label>
                        <select name="is_promotion" id="is_promotion" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                            @if($blog->is_promotion==0)
                                <option value="0" selected>Khuyến mãi</option>
                                <option value="1">Không khuyến mãi</option>
                            
                            @else
                                <option value="0">Khuyến mãi</option>
                                <option value="1" selected>Không khuyến mãi</option>
                            @endif
                        </select>
                        @error('is_promotion')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex-1 h-full">
                    <div class="bg-white px-5 py-4 rounded-md" style="border-top:3px solid rgb(0, 115, 255)">
                        <p class="font-bold my-2">Hình Ảnh<span class="text-red-500 ms-1">*</span></p>
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"/>
                        <div class="text-center mt-2 relative">
                            <button class="bg-blue-400 px-3 py-1 rounded-md text-white cursor-pointer"><i class="fa-regular fa-folder-open"></i> Chọn Hình Ảnh</button>
                            <input type="file" name="image" class="absolute left-[35px] w-[157px] opacity-0 cursor-pointer" id="image">
                        </div>
                    </div>
                    <div class="bg-white px-5 py-2 rounded-md mt-2" style="border-top:3px solid rgb(0, 115, 255)">
                        <p class="font-bold my-2">Sửa Bài<span class="text-red-500 ms-1">*</span></p>
                        <div class="flex justify-between mt-4">
                            <button>
                                <a href="{{ route('blog.index') }}" class="bg-red-500 px-4 py-1 text-white"><i class="fa-solid fa-ban"></i> Hủy</a>
                            </button>
                            <button type="submit" class="bg-green-500 px-4 py-1 text-white"><i class="fa-solid fa-file-lines"></i> Lưu</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
