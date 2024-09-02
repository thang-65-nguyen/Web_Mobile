@extends('layouts.index')
@section('title','Đăng nhập')
@section('content')
    <div class="max-w-[600px] mx-auto relative mt-20">
        <div class="flex justify-center">
            <img src="https://account.cellphones.com.vn/_nuxt/img/Shipper_CPS3.77d4065.png" class="w-[100px] h-[100px] object-cover" alt="">
        </div>
        <h3 class="font-semibold mt-3 text-2xl text-center">Đăng nhập với</h3>
        <div class="mt-10 flex justify-center items-center w-full gap-x-10">
            <div class="flex gap-x-4 cursor-pointer">
                <img src="https://account.cellphones.com.vn/_nuxt/img/image45.93ceca6.png" class="w-6 h-6" alt="">
                <button class="font-[500]">Google</button>
            </div>
            <div class="flex gap-x-4 cursor-pointer">
                <img src="https://account.cellphones.com.vn/_nuxt/img/Logo-Zalo-Arc.a36365b.png" class="w-6 h-6" alt="">
                <button class="font-[500]">Zalo</button>
            </div>
        </div>
        <div class="flex w-[60%] mx-auto justify-center items-center gap-x-2 mt-10 text-[18px]">
            <hr class="w-full bg-[#dbdbdb] h-[1px]">
            hoặc
            <hr class="w-full bg-[#dbdbdb] h-[1px]">
        </div>
        <div class="w-[600px] mx-auto mt-10">
            <div class="relative">
                <input type="text" class="peer outline-none mt-2 border-b pb-2 w-full border-b-[#f4f6f7] focus:border-b-[#e0052b]" placeholder="Nhập số điện thoại" required>
                <label for="name" class="absolute opacity-0 uppercase transition-opacity duration-300 left-0 top-[-10px] text-[12px] font-semibold text-[#e0052b] peer-focus:opacity-100">số điện thoại (*)</label>
            </div>
            <div class="mt-5 relative">
                <input type="password" class="peer outline-none mt-2 border-b pb-2 w-full border-b-[#f4f6f7] focus:border-b-[#e0052b]" placeholder="Nhập mật khẩu" required>
                <label for="name" class="absolute opacity-0 uppercase transition-opacity duration-300 left-0 top-[-10px] text-[12px] font-semibold text-[#e0052b] peer-focus:opacity-100">mật khẩu (*)</label>
            </div>
            <div class="mt-5">
                <button type="submit" class="w-full rounded-md font-semibold bg-[#e0052b] text-white py-2">Đăng nhập</button>
            </div>
        </div>
        <div class="flex justify-center mt-5">Bạn chưa có tài khoản? <a href="/register" class="ms-2 text-[#e0052b] font-bold">Đăng ký ngay</a></div>
    </div>
@endsection