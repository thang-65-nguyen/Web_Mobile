<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://cdn.tiny.cloud/1/i87napbjlo69gt0g6u4nuzujusseulyl6uxvjw01ndn9npmr/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body class="bg-gray-100 h-full">
    <div class="flex h-full">
        <!-- Slide -->
        <div class="w-[16rem] bg-gray-800 text-white min-h-screen">
            <div class="p-5 text-lg font-semibold border-b border-gray-700">
                Admin Panel
            </div>
            <nav class="mt-4">
                <a href="/admin/dashboard" class="block py-2.5 px-4 hover:bg-gray-700"><i class="fa-solid fa-gauge-high"></i> Dashboard</a>
                <a href="/admin/banner" class="block py-2.5 ps-4 hover:bg-gray-700"><i class="fa-solid fa-sliders"></i> Quản Lý Banner Quảng Cáo</a>
                <a href="" class="block py-2.5 px-4 hover:bg-gray-700"><i class="fa-solid fa-users"></i> Quản Lý Tài Khoản</a>
                <a href="/admin/product" class="block py-2.5 px-4 hover:bg-gray-700"><i class="fa-brands fa-product-hunt"></i> Quản Lý Sản Phẩm</a>
                <a href="/admin/brand" class="block py-2.5 px-4 hover:bg-gray-700"><i class="fa-solid fa-tag"></i> Quản Lý Thương Thiệu</a>
                <a href="/admin/category" class="block py-2.5 px-4 hover:bg-gray-700"><i class="fa-solid fa-folder"></i> Quản Lý Thể Loại</a>
                <a href="/admin/blog" class="block py-2.5 px-4 hover:bg-gray-700"><i class="fa-solid fa-newspaper"></i> Quản Lý Bài Viết</a>
                <!-- Dropdown container -->
                <div class="relative">
                    <!-- Dropdown button -->
                    <div class="w-full py-2.5 px-4 hover:bg-gray-700 cursor-pointer" id="menu-button" aria-expanded="true" aria-haspopup="true">
                        <i class="fa-solid fa-location-dot"></i> Quản Lý địa chỉ
                    </div>                    
                    <!-- Dropdown menu -->
                    <div class="absolute left-0 z-20 mx-4 w-56 origin-top-left rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" id="menu-items">
                        <div class="p-1">
                            <a href="/admin/provinces" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Quản Lý Tỉnh</a>
                            <a href="/admin/districts" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Quản Lý Huyện</a>
                            <a href="/admin/wards" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Quản Lý Xã</a>
                        </div>
                    </div>
                </div>
                <a href="#" class="block py-2.5 px-4 hover:bg-gray-700"><i class="fa-solid fa-rectangle-list"></i> Quản Lý Đơn Hàng</a>
                <a href="#" class="block py-2.5 px-4 hover:bg-gray-700"><i class="fa-solid fa-chart-line"></i> Thống Kê Doanh Thu</a>
            </nav>
        </div>

        <!-- Page Content -->
        <div class="flex-1">
            <!-- Header -->
            <header class="bg-white shadow p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <button id="menu-toggle" class="text-gray-600 focus:outline-none ">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <i class="fa-solid fa-bell text-xl"></i>
                            <div class="absolute top-[-8px] right-[-5px] bg-red-300 text-[12px] px-1 rounded-full">1</div>
                        </div>
                        <img src="https://pbs.twimg.com/media/GKkCSFJaoAAlZ7N?format=jpg&name=large" class="w-9 h-9 object-cover rounded-full" alt="">
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="p-4 max-w-[1000px]">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.querySelector('.w-64').classList.toggle('hidden');
        });
    </script>
    <script>
        document.getElementById('menu-button').addEventListener('click', function() {
            const menuItems = document.getElementById('menu-items');
            menuItems.classList.toggle('hidden');
        });
    </script>
</body>
</html>
