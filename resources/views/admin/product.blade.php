@extends('layouts.admin')

@section('title', 'Product List')

@section('content')
    <div class="px-4">
        <div class="">
            <div>
                <h2 class="text-2xl font-semibold leading-tight">Product List</h2>
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
                        <a href="">
                            Add Product
                        </a>
                    </button>
                </div>
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-2 overflow-x-auto">
                <div class="inline-block min-w-full shadow-lg rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    ID
                                </th> 
                                <th class="py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Hình ảnh
                                </th>
                                <th class="py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Tên sản phẩm
                                </th>
                                <th class="py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Hãng sản xuất
                                </th>
                                <th class="py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Hệ điều hành
                                </th>
                                <th class="py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Đánh giá
                                </th>
                                <th class="py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Ngày tạo
                                </th>
                                <th class="py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Trạng thái
                                </th>
                                <th class="py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider ps-2">
                                    Tác vụ
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $products = [
                                    ['id'=>'1','image'=>'https://cdn2.cellphones.com.vn/x/media/catalog/product/i/p/iphone-15-pro-max_3.png','name' => 'Samsung Galaxy Z Fold6','category' => 'Smartphone', 'os' => 'Android','brand' => 'Samsung', 'rating'=>'4.2/5 Điểm','createdDate'=>'14/08/2024','status'=>'Còn Hàng'],
                                    ['id'=>'2','image'=>'https://cdn2.cellphones.com.vn/x/media/catalog/product/i/p/iphone-15-pro-max_3.png','name' => 'MacBook Pro 2023','category' => 'Laptop', 'os' => 'macOS', 'brand' => 'Apple','rating'=>'4.2/5 Điểm','createdDate'=>'14/08/2024','status'=>'Còn Hàng'],
                                    ['id'=>'3','image'=>'https://cdn2.cellphones.com.vn/x/media/catalog/product/i/p/iphone-15-pro-max_3.png','name' => 'iPhone 15 Pro Max','category' => 'Smartphone', 'os' => 'iOS','brand' => 'Apple', 'rating'=>'4.2/5 Điểm','createdDate'=>'14/08/2024','status'=>'Còn Hàng'],
                                ];
                            @endphp

                            @foreach($products as $product)
                                <tr>
                                    <td class="py-4 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div class="ml-3">
                                                <p class="text-gray-900 max-w-[90px] text-ellipsis overflow-hidden whitespace-nowrap">
                                                    {{ $product['id'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 max-w-[100px] text-ellipsis overflow-hidden whitespace-nowrap">
                                            <img src="{{$product['image']}}" alt="{{$product['name']}}" />
                                        </p>
                                    </td>
                                    <td class="py-4 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900">{{ $product['name'] }}</p>
                                    </td>
                                    <td class="py-4 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $product['brand'] }}</p>
                                    </td>
                                    <td class="py-4 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $product['os'] }}</p>
                                    </td>
                                    <td class="py-4 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $product['rating'] }}</p>
                                    </td>
                                    <td class="py-4 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $product['createdDate'] }}</p>
                                    </td>
                                    <td class="py-4 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-white font-semibold whitespace-no-wrap bg-green-400 text-center py-1">{{ $product['status'] }}</p>
                                    </td>
                                    <td class="py-4 border-b border-gray-200 bg-white text-sm">
                                        <button type="button" class="bg-indigo-600 text-white px-2 py-1 ml-2"><i class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="bg-red-600 text-white px-2 py-1"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>
@endsection
