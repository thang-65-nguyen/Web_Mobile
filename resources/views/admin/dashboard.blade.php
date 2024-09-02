@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-semibold">Dashboard</h1>
            <div class="flex items-center gap-x-2">
                <i class="fa-solid fa-gauge-high"></i>
                <span>Home</span>
                >
                <span>Dashboard</span>
            </div>
        </div>
        <div class="grid grid-cols-4 gap-x-2 mt-4">
            <div class="bg-green-600 rounded-sm text-white">
                <div class="flex items-center justify-between p-3">
                    <div>
                        <span class="text-2xl font-bold">4</span>
                        <p>Người Dùng</p>
                    </div>
                    <i class="fa-solid fa-user text-4xl"></i>
                </div>
                <div class="w-full bg-green-800 mt-2 text-center py-2">More info <i class="fa-solid fa-circle-right"></i></div>
            </div>
            <div class="bg-blue-600 rounded-sm text-white">
                <div class="flex items-center justify-between p-3">
                    <div>
                        <span class="text-2xl font-bold">4</span>
                        <p>Bài Viết</p>
                    </div>
                    <i class="fa-solid fa-book text-4xl"></i>
                </div>
                <div class="w-full bg-blue-800 mt-2 text-center py-2">More info <i class="fa-solid fa-circle-right"></i></div>
            </div>
            <div class="bg-orange-600 rounded-sm text-white">
                <div class="flex items-center justify-between p-3">
                    <div>
                        <span class="text-2xl font-bold">4</span>
                        <p>Sản Phẩm</p>
                    </div>
                    <i class="fa-solid fa-cart-shopping text-4xl"></i>
                </div>
                <div class="w-full bg-orange-800 mt-2 text-center py-2">More info <i class="fa-solid fa-circle-right"></i></div>
            </div>
            <div class="bg-purple-600 rounded-sm text-white">
                <div class="flex items-center justify-between p-3">
                    <div>
                        <span class="text-2xl font-bold">4</span>
                        <p>Đơn Hàng</p>
                    </div>
                    <i class="fa-solid fa-rectangle-list text-4xl"></i>
                </div>
                <div class="w-full bg-purple-800 mt-2 text-center py-2">More info <i class="fa-solid fa-circle-right"></i></div>
            </div>
        </div>
    </div>
@endsection
