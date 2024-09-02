<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo Truyện Mới</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-center text-lg my-10">Tạo Truyện Mới</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('backend.truyen.store') }}" method="POST" enctype="multipart/form-data" class="w-[1140px] mx-auto">
        @csrf
    <div class="grid grid-cols-2 gap-x-2 my-3">
        <div class="w-full">
            <label for="name">Tên Truyện:</label>
            <input type="text" id="name" class="w-full mt-3 outline-none border rounded-lg border-black px-1" name="name" required>
            @error('name')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full">
            <label for="author">Tác Giả:</label>
            <input type="text" id="author" class="w-full mt-3 outline-none border rounded-lg border-black px-1" name="author" required>
            @error('author')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full">
            <label for="status">Tình Trạng:</label>
            <select id="status" name="status" class="w-full mt-3 outline-none border rounded-lg border-black px-1" required>
                <option value="">Chọn tình trạng</option>
                <option value="0">Đang hoàn thành</option>
                <option value="1">Đã hoàn thành</option>
            </select>
            @error('status')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full">
            <label for="view">Lượt Xem:</label>
            <input type="number" class="w-full mt-3 outline-none border rounded-lg border-black px-1" id="view" name="view">
        </div>  
        <div class="w-full">
            <label for="like">Lượt Thích:</label>
            <input type="number" class="w-full mt-3 outline-none border rounded-lg border-black px-1" id="like" name="like">
        </div>
        <div class="w-full">
            <label for="follow">Theo Dõi:</label>
            <input type="number" class="w-full mt-3 outline-none border rounded-lg border-black px-1" id="follow" name="follow">
        </div>
        <div class="w-full">
            <label for="slug">Slug:</label>
            <input type="text" id="slug" class="w-full mt-3 outline-none border rounded-lg border-black px-1" name="slug" required>
            @error('slug')
            <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full">
            <label for="hot">Hot:</label>
            <select id="hot" name="hot" class="w-full mt-3 outline-none border rounded-lg border-black px-1" required>
                <option value="">Chọn tình trạng</option>
                <option value="0">Hot</option>
                <option value="1">Không Hot</option>
            </select>
        </div>
        <div class="w-full">
            <label for="outstanding">Nổi Bật:</label>
            <select id="outstanding" name="outstanding" class="w-full mt-3 outline-none border rounded-lg border-black px-1" required>
                <option value="">Chọn tình trạng</option>
                <option value="0">Nổi Bật</option>
                <option value="1">Không Nổi Bật</option>
            </select>
        </div>
        <div class="w-full">
            <label for="description">Mô Tả:</label>
            <textarea id="description" class="w-full mt-3 outline-none border rounded-lg border-black px-1" name="description"></textarea>
        </div>
        <div class="w-full">
            <label for="img">Ảnh:</label>
            <input type="file" id="img" name="img[]" class="w-full mt-3 outline-none border rounded-lg border-black px-1" multiple>
        </div>
    </div>
        <button type="submit">Tạo Truyện</button>
    </form>
</body>
</html>
