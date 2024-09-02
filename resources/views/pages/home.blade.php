@extends('layouts.index')
@section('home')
@extends('partials.banners')

<div class="w-[1190px] mx-auto mt-10">
    <div class="flex justify-between items-center">
        <h3 class="font-semibold text-[21px]">ĐIỆN THOẠI NỔI BẬT NHẤT</h3>
        <div class="flex gap-x-2">
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">Apple</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">Samsung</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">Xiaomi</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">OPPO</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">vivo</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">realme</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">ASUS</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">TECNO</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">Nokia</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">Infinix</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">Oneplus</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">Xem tất cả</button>
        </div>
    </div>
    <div class="grid grid-cols-5 gap-x-5 mt-5">
        <div class="shadow-custom rounded-br-[15px] rounded-bl-[15px]">
            <div class="relative">
                <div class="bg-no-repeat w-[80px] bg-[50%] left-[-5px] h-[31px] absolute" style="background-image: url('{{asset('assets/svg/price_percent.svg')}}' )">
                    <p class="w-full my-1 text-white text-[12px] font-bold text-center">Giảm 10%</p>
                </div>
                <div class="text-[10px] border-[#0c53b7] border text-[#0c53b7] rounded-[5px] px-3 py-[2px] absolute right-0">Trả góp 0%</div>
            </div>
            <div class="mt-10 flex justify-center">
                <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/t/e/tecno-pova-6-neo-1.png" class="w-[70%]" alt="">
            </div>
            <div class="px-3 font-bold text-md">Tecno Pova 6 Neo (8GB 128GB)</div>
            <div class="mt-2 px-3 text-[#df1021] font-bold">4.150.000đ <span class="text-[#717171] line-through">4.590.000đ</span></div>
            <div class="mt-2 flex justify-between px-3 pb-3">
                <div class="text-[#f49e0b]">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="like">
                    <span class="text-sm">Yêu thích</span>
                    <i class="fa-regular fa-heart text-[#cc051c]"></i>
                </div>
            </div>
        </div>
        <div class="shadow-custom rounded-br-[15px] rounded-bl-[15px]">
            <div class="relative">
                <div class="bg-no-repeat w-[80px] bg-[50%] left-[-5px] h-[31px] absolute" style="background-image: url('{{asset('assets/svg/price_percent.svg')}}' )">
                    <p class="w-full my-1 text-white text-[12px] font-bold text-center">Giảm 10%</p>
                </div>
                <div class="text-[10px] border-[#0c53b7] border text-[#0c53b7] rounded-[5px] px-3 py-[2px] absolute right-0">Trả góp 0%</div>
            </div>
            <div class="mt-10 flex justify-center">
                <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/t/e/tecno-pova-6-neo-1.png" class="w-[70%]" alt="">
            </div>
            <div class="px-3 font-bold text-md">Tecno Pova 6 Neo (8GB 128GB)</div>
            <div class="mt-2 px-3 text-[#df1021] font-bold">4.150.000đ <span class="text-[#717171] line-through">4.590.000đ</span></div>
            <div class="mt-2 flex justify-between px-3 pb-3">
                <div class="text-[#f49e0b]">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="like">
                    <span class="text-sm">Yêu thích</span>
                    <i class="fa-regular fa-heart text-[#cc051c]"></i>
                </div>
            </div>
        </div>
        <div class="shadow-custom rounded-br-[15px] rounded-bl-[15px]">
            <div class="relative">
                <div class="bg-no-repeat w-[80px] bg-[50%] left-[-5px] h-[31px] absolute" style="background-image: url('{{asset('assets/svg/price_percent.svg')}}' )">
                    <p class="w-full my-1 text-white text-[12px] font-bold text-center">Giảm 10%</p>
                </div>
                <div class="text-[10px] border-[#0c53b7] border text-[#0c53b7] rounded-[5px] px-3 py-[2px] absolute right-0">Trả góp 0%</div>
            </div>
            <div class="mt-10 flex justify-center">
                <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/t/e/tecno-pova-6-neo-1.png" class="w-[70%]" alt="">
            </div>
            <div class="px-3 font-bold text-md">Tecno Pova 6 Neo (8GB 128GB)</div>
            <div class="mt-2 px-3 text-[#df1021] font-bold">4.150.000đ <span class="text-[#717171] line-through">4.590.000đ</span></div>
            <div class="mt-2 flex justify-between px-3 pb-3">
                <div class="text-[#f49e0b]">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="like">
                    <span class="text-sm">Yêu thích</span>
                    <i class="fa-regular fa-heart text-[#cc051c]"></i>
                </div>
            </div>
        </div>
        <div class="shadow-custom rounded-br-[15px] rounded-bl-[15px]">
            <div class="relative">
                <div class="bg-no-repeat w-[80px] bg-[50%] left-[-5px] h-[31px] absolute" style="background-image: url('{{asset('assets/svg/price_percent.svg')}}' )">
                    <p class="w-full my-1 text-white text-[12px] font-bold text-center">Giảm 10%</p>
                </div>
                <div class="text-[10px] border-[#0c53b7] border text-[#0c53b7] rounded-[5px] px-3 py-[2px] absolute right-0">Trả góp 0%</div>
            </div>
            <div class="mt-10 flex justify-center">
                <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/t/e/tecno-pova-6-neo-1.png" class="w-[70%]" alt="">
            </div>
            <div class="px-3 font-bold text-md">Tecno Pova 6 Neo (8GB 128GB)</div>
            <div class="mt-2 px-3 text-[#df1021] font-bold">4.150.000đ <span class="text-[#717171] line-through">4.590.000đ</span></div>
            <div class="mt-2 flex justify-between px-3 pb-3">
                <div class="text-[#f49e0b]">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="like">
                    <span class="text-sm">Yêu thích</span>
                    <i class="fa-regular fa-heart text-[#cc051c]"></i>
                </div>
            </div>
        </div>
        <div class="shadow-custom rounded-br-[15px] rounded-bl-[15px]">
            <div class="relative">
                <div class="bg-no-repeat w-[80px] bg-[50%] left-[-5px] h-[31px] absolute" style="background-image: url('{{asset('assets/svg/price_percent.svg')}}' )">
                    <p class="w-full my-1 text-white text-[12px] font-bold text-center">Giảm 10%</p>
                </div>
                <div class="text-[10px] border-[#0c53b7] border text-[#0c53b7] rounded-[5px] px-3 py-[2px] absolute right-0">Trả góp 0%</div>
            </div>
            <div class="mt-10 flex justify-center">
                <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/t/e/tecno-pova-6-neo-1.png" class="w-[70%]" alt="">
            </div>
            <div class="px-3 font-bold text-md">Tecno Pova 6 Neo (8GB 128GB)</div>
            <div class="mt-2 px-3 text-[#df1021] font-bold">4.150.000đ <span class="text-[#717171] line-through">4.590.000đ</span></div>
            <div class="mt-2 flex justify-between px-3 pb-3">
                <div class="text-[#f49e0b]">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                {{-- <div class="inline-block group relative">
                    <span class="text-sm">Yêu thích</span>
                    <!-- Icon bình thường -->
                    <i class="fa-regular fa-heart text-[#cc051c] transition-opacity duration-200 group-hover:hidden"></i>
                    <!-- Icon hiển thị khi hover -->
                    <i class="fa-solid fa-heart text-[#cc051c] hidden group-hover:inline-block animate-pulse transition-transform duration-200 transform group-hover:scale-110"></i>
                </div>                     --}}
            </div>
        </div>
    </div>
</div>
{{-- Laptop --}}

<div class="w-[1190px] mx-auto mt-10">
    <div class="flex justify-between items-center">
        <h3 class="font-semibold text-[21px]">LAPTOP</h3>
        <div class="flex gap-x-2">
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">Macbook</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">Asus</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">MSI</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">Lenovo</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">HP</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">Acer</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">Dell</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">Huawei</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">Gigabyte</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">Laptop AI</button>
            <button class="bg-[#f3f4f6] px-2 py-1 rounded-lg border cursor-pointer">Xem tất cả</button>
        </div>
    </div>
    <div class="grid grid-cols-5 gap-x-5 mt-5">
        <div class="shadow-custom rounded-br-[15px] rounded-bl-[15px] h-full">
            <div class="relative">
                <div class="bg-no-repeat w-[80px] bg-[50%] left-[-5px] h-[31px] absolute" style="background-image: url('{{asset('assets/svg/price_percent.svg')}}' )">
                    <p class="w-full my-1 text-white text-[12px] font-bold text-center">Giảm 10%</p>
                </div>
                <div class="text-[10px] border-[#0c53b7] border text-[#0c53b7] rounded-[5px] px-3 py-[2px] absolute right-0">Trả góp 0%</div>
            </div>
            <div class="mt-10 flex justify-center">
                <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/m/a/macbook_5_1.png" class="w-[70%]" alt="">
            </div>
            <div class="px-3 mt-3 font-bold text-sm text-[#444]">Apple MacBook Air M1 256GB 2020 I Chính hãng Apple Việt Nam</div>
            <div class="mt-2 px-3 text-[#df1021] font-bold">4.150.000đ <span class="text-[#717171] line-through">4.590.000đ</span></div>
            <div class="mt-2 flex justify-between px-3 pb-3">
                <div class="text-[#f49e0b]">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="like">
                    <span class="text-sm">Yêu thích</span>
                    <i class="fa-regular fa-heart text-[#cc051c]"></i>
                </div>
            </div>
        </div>
        <div class="shadow-custom rounded-br-[15px] rounded-bl-[15px] h-full">
            <div class="relative">
                <div class="bg-no-repeat w-[80px] bg-[50%] left-[-5px] h-[31px] absolute" style="background-image: url('{{asset('assets/svg/price_percent.svg')}}' )">
                    <p class="w-full my-1 text-white text-[12px] font-bold text-center">Giảm 10%</p>
                </div>
                <div class="text-[10px] border-[#0c53b7] border text-[#0c53b7] rounded-[5px] px-3 py-[2px] absolute right-0">Trả góp 0%</div>
            </div>
            <div class="mt-10 flex justify-center">
                <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/m/a/macbook_5_1.png" class="w-[70%]" alt="">
            </div>
            <div class="px-3 mt-3 font-bold text-sm text-[#444]">Apple MacBook Air M1 256GB 2020 I Chính hãng Apple Việt Nam</div>
            <div class="mt-2 px-3 text-[#df1021] font-bold">4.150.000đ <span class="text-[#717171] line-through">4.590.000đ</span></div>
            <div class="mt-2 flex justify-between px-3 pb-3">
                <div class="text-[#f49e0b]">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="like">
                    <span class="text-sm">Yêu thích</span>
                    <i class="fa-regular fa-heart text-[#cc051c]"></i>
                </div>
            </div>
        </div>
        <div class="shadow-custom rounded-br-[15px] rounded-bl-[15px] h-full">
            <div class="relative">
                <div class="bg-no-repeat w-[80px] bg-[50%] left-[-5px] h-[31px] absolute" style="background-image: url('{{asset('assets/svg/price_percent.svg')}}' )">
                    <p class="w-full my-1 text-white text-[12px] font-bold text-center">Giảm 10%</p>
                </div>
                <div class="text-[10px] border-[#0c53b7] border text-[#0c53b7] rounded-[5px] px-3 py-[2px] absolute right-0">Trả góp 0%</div>
            </div>
            <div class="mt-10 flex justify-center">
                <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/m/a/macbook_5_1.png" class="w-[70%]" alt="">
            </div>
            <div class="px-3 mt-3 font-bold text-sm text-[#444]">Apple MacBook Air M1 256GB 2020 I Chính hãng Apple Việt Nam</div>
            <div class="mt-2 px-3 text-[#df1021] font-bold">4.150.000đ <span class="text-[#717171] line-through">4.590.000đ</span></div>
            <div class="mt-2 flex justify-between px-3 pb-3">
                <div class="text-[#f49e0b]">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="like">
                    <span class="text-sm">Yêu thích</span>
                    <i class="fa-regular fa-heart text-[#cc051c]"></i>
                </div>
            </div>
        </div>
        <div class="shadow-custom rounded-br-[15px] rounded-bl-[15px] h-full">
            <div class="relative">
                <div class="bg-no-repeat w-[80px] bg-[50%] left-[-5px] h-[31px] absolute" style="background-image: url('{{asset('assets/svg/price_percent.svg')}}' )">
                    <p class="w-full my-1 text-white text-[12px] font-bold text-center">Giảm 10%</p>
                </div>
                <div class="text-[10px] border-[#0c53b7] border text-[#0c53b7] rounded-[5px] px-3 py-[2px] absolute right-0">Trả góp 0%</div>
            </div>
            <div class="mt-10 flex justify-center">
                <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/m/a/macbook_5_1.png" class="w-[70%]" alt="">
            </div>
            <div class="px-3 mt-3 font-bold text-sm text-[#444]">Apple MacBook Air M1 256GB 2020 I Chính hãng Apple Việt Nam</div>
            <div class="mt-2 px-3 text-[#df1021] font-bold">4.150.000đ <span class="text-[#717171] line-through">4.590.000đ</span></div>
            <div class="mt-2 flex justify-between px-3 pb-3">
                <div class="text-[#f49e0b]">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="like">
                    <span class="text-sm">Yêu thích</span>
                    <i class="fa-regular fa-heart text-[#cc051c]"></i>
                </div>
            </div>
        </div>
        <div class="shadow-custom rounded-br-[15px] rounded-bl-[15px] h-full">
            <div class="relative">
                <div class="bg-no-repeat w-[80px] bg-[50%] left-[-5px] h-[31px] absolute" style="background-image: url('{{asset('assets/svg/price_percent.svg')}}' )">
                    <p class="w-full my-1 text-white text-[12px] font-bold text-center">Giảm 10%</p>
                </div>
                <div class="text-[10px] border-[#0c53b7] border text-[#0c53b7] rounded-[5px] px-3 py-[2px] absolute right-0">Trả góp 0%</div>
            </div>
            <div class="mt-10 flex justify-center">
                <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/m/a/macbook_5_1.png" class="w-[70%]" alt="">
            </div>
            <div class="px-3 mt-3 font-bold text-sm text-[#444]">Apple MacBook Air M1 256GB 2020 I Chính hãng Apple Việt Nam</div>
            <div class="mt-2 px-3 text-[#df1021] font-bold">4.150.000đ <span class="text-[#717171] line-through">4.590.000đ</span></div>
            <div class="mt-2 flex justify-between px-3 pb-3">
                <div class="text-[#f49e0b]">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="like">
                    <span class="text-sm">Yêu thích</span>
                    <i class="fa-regular fa-heart text-[#cc051c]"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection