@extends('layouts.admin')

@section('title', 'Danh Sách Tỉnh')

@section('content')
    <div class="px-4">
        <div class="py-0">
            <div>
                <h2 class="text-2xl font-semibold leading-tight">Danh Sách Tỉnh</h2>
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
                    <button class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="button">
                        <a href="{{ route('provinces.create') }}">
                            Thêm tỉnh
                        </a>                        
                    </button>
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
                                    Tên
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Trạng thái
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($provinces as $key => $province)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $key + 1 }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-nowrap">{{ $province->name }}</p>
                                </td>
                                <td class="px-5 py-5 bg-white">
                                    @if ($province->is_active == 0)
                                        <span class="bg-green-500 px-2 py-1 text-white rounded-sm">Kích Hoạt</span>
                                    @else
                                        <span class="bg-red-500 px-2 py-1 text-white">Không Kích Hoạt</span>
                                    @endif
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <a href="{{ route('provinces.edit', $province->id) }}" class="bg-indigo-600 text-white px-2 py-1 ml-2"><i class="fa-solid fa-pen"></i></a>
                                    <form action="{{ route('provinces.destroy', $province->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-600 text-white px-2 py-1"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="px-5 py-3 flex justify-between items-center">
                    <p class="text-gray-700">Hiển thị trang <span class="font-bold">{{ $provinces->currentPage() }}/{{ $provinces->lastPage() }}</span></p>
                    <div class="flex items-center gap-x-2 justify-between">
                        <!-- First Page Link -->
                        @if ($provinces->onFirstPage())
                            <span class="px-4 py-[6px] rounded-md bg-gray-300 text-gray-600 cursor-not-allowed">Up</span>
                        @else
                            <a href="{{ $provinces->url(1) }}" class="px-4 py-2 bg-blue-500 text-white hover:bg-blue-600">Up</a>
                        @endif
                        <!-- Default Pagination Links -->
                        {{ $provinces->links() }}
                        <!-- Last Page Link -->
                        @if ($provinces->currentPage() == $provinces->lastPage())
                            <span class="px-4 py-2 bg-gray-300 text-gray-600 cursor-not-allowed">Down</span>
                        @else
                            <a href="{{ $provinces->url($provinces->lastPage()) }}" class="px-4 py-[6px] rounded-md bg-blue-500 text-white hover:bg-blue-600">Down</a>
                        @endif

                    </div>
                </div>
            </div> 
        </div>
    </div>
@endsection