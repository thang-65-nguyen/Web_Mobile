@extends('layouts.admin')
@section('title', 'Sửa thông tin tỉnh')
@section('content')
    <div class="px-4">
        <div class="py-8">
            <div>
                <h2 class="text-2xl font-semibold leading-tight">Sửa thông tin tỉnh</h2>
            </div>
            <div class="my-4">
                <form method="POST" action="{{ route('provinces.update',[$provinces->id]) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Brand Name</label>
                        <input type="text" id="name" name="name" value="{{$provinces->name}}" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('name') border-red-500 @enderror" required>
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kích hoạt</label>
                        <select name="is_active" id="is_active" class="mt-1 p-2 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('is_active') border-red-500 @enderror">
                            @if($provinces->is_active==0)
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
                    <div class="flex items-center justify-end">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-600">Save</button>
                        <a href="{{ route('provinces.index') }}" class="ml-4 text-gray-600 hover:text-gray-800">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
