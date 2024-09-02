@extends('layouts.admin')
@section('title', 'Create Banner')
@section('content')
    <div class="px-4">
        <div class="py-8">
            <div>
                <h2 class="text-2xl font-semibold leading-tight">Create Banner</h2>
            </div>
            <div class="my-4">
                <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Tiêu đề</label>
                        <input type="text" name="title" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('name') border-red-500 @enderror" id="title">
                    </div>
                    <div class="form-group">
                        <label for="image">Hình ảnh</label>
                        <input type="file" name="image" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('name') border-red-500 @enderror" id="image">
                    </div>
                    <div class="form-group">
                        <label for="link">Liên kết</label>
                        <input type="text" name="link" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('name') border-red-500 @enderror" id="link">
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả</label>
                        <textarea name="description" class="outline-none p-2 mt-1 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('description') border-red-500 @enderror" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="position">Vị trí</label>
                        <input type="text" name="position" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('name') border-red-500 @enderror" id="position">
                    </div>
                    <div class="form-group">
                        <label for="start_date">Ngày bắt đầu</label>
                        <input type="date" name="start_date" class="outline-none p-2 mt-1 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('description') border-red-500 @enderror" id="start_date">
                    </div>
                    <div class="form-group">
                        <label for="end_date">Ngày kết thúc</label>
                        <input type="date" name="end_date" class="outline-none p-2 mt-1 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('description') border-red-500 @enderror" id="end_date">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kích hoạt</label>
                        <select name="is_active" id="is_active" class="mt-1 p-2 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('is_active') border-red-500 @enderror">
                            <option value="0" {{ old('is_active') == 0 ? 'selected' : '' }}>Kích hoạt</option>
                            <option value="1" {{ old('is_active') == 1 ? 'selected' : '' }}>Không kích hoạt</option>
                        </select>
                        @error('is_active')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-center justify-end">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-600">Thêm Banner</button>
                        <a href="{{ route('banner.index') }}" class="ml-4 text-gray-600 hover:text-gray-800">Trở lại</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
