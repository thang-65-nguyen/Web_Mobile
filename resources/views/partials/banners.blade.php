@section('content')
<div class="flex gap-x-4">
    @php
        $menuItems = [
            ['icon' => 'phone.svg', 'label' => 'Điện thoại, tablet', 'link' => '#'],
            ['icon' => 'laptop.svg', 'label' => 'Laptop', 'link' => '#'],
            ['icon' => 'headphones.svg', 'label' => 'Âm thanh', 'link' => '#'],
            ['icon' => 'watch.svg', 'label' => 'Đồng hồ, Camera', 'link' => '#'],
            ['icon' => 'accessory.svg', 'label' => 'Phụ kiện', 'link' => '#'],
            ['icon' => 'computer.svg', 'label' => 'PC, Màn hình', 'link' => '#'],
            ['icon' => 'television.svg', 'label' => 'Tivi', 'link' => '#'],
            ['icon' => 'promotion.svg', 'label' => 'Khuyến mãi', 'link' => '#'],
            ['icon' => 'newspaper.svg', 'label' => 'Tin công nghệ', 'link' => '/blog'],
        ];
    @endphp
    @if($categories->isNotEmpty())
        @php 
            $featuredCategory = $categories->where('is_active',0);
        @endphp
    
        @if($featuredCategory)
    <div class="w-56 shadow-md rounded-lg">
        <div class="flex flex-wrap">
            {{-- @foreach($categories as $category) --}}
                <a href="#" class="flex justify-between items-center w-full hover:text-[#cc051c] hover:bg-[#f8f8f8] cursor-pointer px-4 py-2 group">
                    <div class="flex items-center gap-x-2">
                        <div class="w-[25px] h-[25px]">
                            {{-- <img src="{{ asset('assets/svg/' . $item['icon']) }}" alt="{{ $item['label'] }}"> --}}
                        </div>
                        <div class="font-semibold text-sm">{{ $featuredCategory->name }}</div>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                    <div class="fixed w-[965px] top-[100px] rounded-lg h-[385px] left-[270px] bg-white shadow-custom px-10 py-2 hidden group-hover:block">
                        <div class="grid grid-cols-5">
                            <div>
                                <h2 class="font-semibold">Hãng điện thoại</h2>
                                <ul class="leading-7 mt-2">
                                    <li class="text-gray-300">IPhone</li>
                                    <li class="text-gray-300">Samsung</li>
                                    <li class="text-gray-300">Xiaomi</li>
                                    <li class="text-gray-300">OPPO</li>
                                    <li class="text-gray-300">realme</li>
                                    <li class="text-gray-300">vivo</li>
                                    <li class="text-gray-300">TECNO</li>
                                    <li class="text-gray-300">Infinix</li>
                                    <li class="text-gray-300">Nokia</li>
                                    <li class="text-gray-300">Nubia</li>
                                    <li class="text-gray-300">OnePlus</li>
                                    <li class="text-gray-300">Masstel</li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="font-semibold">Mức giá điện thoại</h2>
                                <ul class="leading-7 mt-2">
                                    <li class="text-gray-300">Dưới 2 triệu</li>
                                    <li class="text-gray-300">Từ 2 - 4 triệu</li>
                                    <li class="text-gray-300">Từ 4 - 7 triệu</li>
                                    <li class="text-gray-300">Từ 7 - 13 triệu</li>
                                    <li class="text-gray-300">Từ 13 - 20 triệu</li>
                                    <li class="text-gray-300">Trên 20 triệu</li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="font-semibold">Điện thoại HOT</h2>
                                <ul class="leading-7 mt-2">
                                    <li class="text-gray-300">iPhone 15 Pro Max</li>
                                    <li class="text-gray-300">Galaxy Z Fold6</li>
                                    <li class="text-gray-300">Galaxy Z Flip6</li>
                                    <li class="text-gray-300">Samsung Galaxy A35</li>
                                    <li class="text-gray-300">Oppo reno12 5G</li>
                                    <li class="text-gray-300">Oppo reno12 F</li>
                                    <li class="text-gray-300">Techno Pova 6 Neo</li>
                                    <li class="text-gray-300">Samsung Galaxy M34</li>
                                    <li class="text-gray-300">Xiaomi 14 Ultra 5G</li>
                                    <li class="text-gray-300">OPPO Reno11 F 5G</li>
                                    <li class="text-gray-300">Tecno Camon 30</li>
                                    <li class="text-gray-300">POCCO M6</li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="font-semibold">Hãng máy tính bảng</h2>
                                <ul class="leading-7 mt-2">
                                    <li class="text-gray-300">iPad</li>
                                    <li class="text-gray-300">Samsung</li>
                                    <li class="text-gray-300">Xiaomi</li>
                                    <li class="text-gray-300">Huawei</li>
                                    <li class="text-gray-300">Lenovo</li>
                                    <li class="text-gray-300">Nokia</li>
                                    <li class="text-gray-300">Teclast</li>
                                    <li class="text-gray-300">Máy đọc sách</li>
                                    <li class="text-gray-300">Kindle</li>
                                    <li class="text-gray-300">Boot</li>
                                    <li class="text-gray-300">Xem thêm tất cả Tablet</li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="font-semibold">Máy tính bảng HOT</h2>
                                <ul class="leading-7 mt-2">
                                    <li class="text-gray-300">iPad Air 2024</li>
                                    <li class="text-gray-300">iPad Pro 2024</li>
                                    <li class="text-gray-300">Galaxy Tab S9 FE 5G</li>
                                    <li class="text-gray-300">Galaxy Tab S9 Ultra</li>
                                    <li class="text-gray-300">Xiaomi Pad 6 256GB256GB</li>
                                    <li class="text-gray-300">Huawei Matepad 11.5"S</li>
                                    <li class="text-gray-300">Xiaomi Pad SE</li>
                                    <li class="text-gray-300">Xiaomi Redmi Pad Pro</li>
                                    <li class="text-gray-300">Teclast M50</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>
            {{-- @endforeach --}}
        </div>
    </div>  
        @else
            <p>Chưa có danh mục nào.</p>
        @endif   
    @else
        <p>Chưa có danh mục nào.</p>
    @endif          
    <div class="w-[668px] rounded-2xl">
        <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:10/plain/https://dashboard.cellphones.com.vn/storage/m55-cate-gia-hotsale-moi-10990.png" alt="Banner Quảng Cáo">
        <div class="flex justify-between shadow-md text-[#343a40]">
            <div class="text-center text-[13px] px-2 pt-4 mb-1 cursor-pointer hover:bg-[#f3f4f6]">
                GALAXY Z FLIP 6 
                <br>
                Ưu đãi tốt chốt ngay
            </div>
            <div class="text-center text-[12px] px-2 border-2 mb-1 font-bold hover:bg-[#f3f4f6] p-4 cursor-pointer border-b-[#cb051c] border-t-transparent border-l-transparent border-r-transparent">
                GALAXY Z FLIP 6 
                <br>
                Ưu đãi tốt chốt ngay
            </div>
            <div class="text-center text-[13px] px-2 pt-4 mb-1 cursor-pointer hover:bg-[#f3f4f6]">
                GALAXY Z FLIP 6 
                <br>
                Ưu đãi tốt chốt ngay
            </div>
            <div class="text-center text-[13px] px-2 pt-4 mb-1 cursor-pointer hover:bg-[#f3f4f6]">
                GALAXY Z FLIP 6 
                <br>
                Ưu đãi tốt chốt ngay
            </div>
            <div class="text-center text-[13px] px-2 pt-4 mb-1 cursor-pointer hover:bg-[#f3f4f6]">
                GALAXY Z FLIP 6 
                <br>
                Ưu đãi tốt chốt ngay
            </div>
        </div>
    </div>
    <div class="flex-1">
            <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:10/plain/https://dashboard.cellphones.com.vn/storage/m55-cate-gia-hotsale-moi-10990.png" alt="Banner Quảng Cáo" class="shadow-md rounded-md">
        <div class="mt-4">
            <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:10/plain/https://dashboard.cellphones.com.vn/storage/m55-cate-gia-hotsale-moi-10990.png" alt="Banner Quảng Cáo" class="shadow-md rounded-md">
        </div>
        <div class="mt-4">
            <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:10/plain/https://dashboard.cellphones.com.vn/storage/m55-cate-gia-hotsale-moi-10990.png" alt="Banner Quảng Cáo" class="shadow-md rounded-md">
        </div>
    </div>
</div>
@endsection