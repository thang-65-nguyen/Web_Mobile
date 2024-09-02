@extends('layouts.admin')

@section('title', 'Danh sách danh mục')

@section('content')
    <div class="px-4">
        <div class="py-8">
            <div>
                <h2 class="text-2xl font-semibold leading-tight">Danh sách danh mục</h2>
            </div>
            <div class="my-2 flex sm:flex-row flex-col">
                <div class="block relative">
                    <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                            <path d="M10,20C5.58,20,2,16.42,2,12S5.58,4,10,4s8,3.58,8,8S14.42,20,10,20z M10,6C7.24,6,5,8.24,5,11s2.24,5,5,5s5-2.24,5-5 S12.76,6,10,6z M22,21.73L18.54,18.27c-0.38-0.38-1.02-0.38-1.41,0c-0.38,0.38-0.38,1.02,0,1.41L20.59,23C20.97,23.39,21.61,23.39,22,23 S22.38,22.11,22,21.73z"></path>
                        </svg>
                    </span>
                    <input placeholder="Search" class="h-full appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"/>
                </div>
                <div class="flex-grow"></div>
                <div>
                    <button class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="button">
                        <a href="{{ route('category.create') }}">
                        Thêm danh mục
                        </a>
                    </button>
                </div>
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Mã
                                </th> 
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Tên danh mục
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Mô tả
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Trạng thái
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Tác vụ
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key =>  $category)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $key + 1 }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-nowrap">{{ $category->name }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-nowrap text-ellipsis overflow-hidden w-[200px]">{{ $category->description }}</p>
                                </td>
                                <td class="px-5 py-5 bg-white">
                                    @if ($category->is_active == 0)
                                        <span class="bg-green-500 px-2 py-1 text-white rounded-sm">Kích Hoạt</span>
                                    @else
                                        <span class="bg-red-500 px-2 py-1 text-white">Không Kích Hoạt</span>
                                    @endif
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <a href="{{ route('category.edit', $category->id) }}" class="text-indigo-600 hover:text-indigo-900">Sửa</a>
                                    <form action="{{ route('category.destroy', $category->id) }}" method="POST" class="inline-block ml-4">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $categories->links('vendor.pagination.tailwind') }}
                {{-- <div class="py-3 flex justify-between items-center">
                    <p class="text-gray-700">Hiển thị trang <span class="font-bold">{{ $categories->currentPage() }}/{{ $categories->lastPage() }}</span> của <span class="font-bold">{{ $categories->total() }}</span> danh mục</p>
                    <div class="flex items-center gap-x-2 justify-between">
                        <!-- First Page Link -->
                        @if ($categories->onFirstPage())
                            <span class="px-4 py-[6px] rounded-md bg-gray-300 text-gray-600 cursor-not-allowed">Trang đầu</span>
                        @else
                            <a href="{{ $categories->url(1) }}" class="px-4 py-2 bg-blue-500 text-white hover:bg-blue-600">Trang đầu</a>
                        @endif
                        <!-- Default Pagination Links -->
                        
                        {{ $categories->links('vendor.pagination.tailwind') }}
                        <!-- Last Page Link -->
                        @if ($categories->currentPage() == $categories->lastPage())
                            <span class="px-4 py-2 bg-gray-300 text-gray-600 cursor-not-allowed">Trang cuối</span>
                        @else
                            <a href="{{ $categories->url($categories->lastPage()) }}" class="px-4 py-[6px] rounded-md bg-blue-500 text-white hover:bg-blue-600">Trang cuối</a>
                        @endif
                    </div>
                </div> --}}
            </div> 
        </div>
    </div>
@endsection
