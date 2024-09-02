@extends('layouts.admin')
@section('title', 'Create Brand')
@section('content')
    <div class="px-4">
        <div class="py-8">
            <div>
                <h2 class="text-2xl font-semibold leading-tight">Thêm thương thiệu mới</h2>
            </div>
            <div class="my-4">
                <form method="POST" action="{{ route('brand.store') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Tên thương thiệu</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('name') border-red-500 @enderror" required>
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Mô tả</label>
                        <textarea id="description" style="resize: none" name="description" rows="4" class="outline-none p-2 mt-1 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
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
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-600">Thêm Mới</button>
                        <a href="{{ route('brand.index') }}" class="ml-4 text-gray-600 hover:text-gray-800">Trở Lại</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
