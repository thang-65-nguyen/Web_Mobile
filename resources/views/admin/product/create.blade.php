@extends('layouts.admin')
@section('title', 'Thêm sản phẩm mới')
@section('content')
    <form>
        <!-- Phần 1: Thông tin cơ bản của sản phẩm -->
        <div class="bg-white px-4 pt-3 pb-3 rounded-md" style="border-top:3px solid rgb(0, 115, 255)">
            <div class="flex justify-between items-center">
                <div class="text-xl">Thông tin Sản Phẩm</div>
                <i class="fa-solid fa-minus cursor-pointer toggle-info"></i>
            </div>
            <div class="product-details">
                <div class="flex gap-x-2 justify-between w-full">
                    <div class="col-md-4">
                        <p class="font-bold my-2">Hình Ảnh Hiển Thị<span class="text-red-500 ms-1">*</span></p>
                        <img src="https://cdn.vectorstock.com/i/preview-1x/50/20/no-photo-or-blank-image-icon-loading-images-vector-37375020.webp"/>
                        <div class="text-center mt-2">
                            <button class="bg-blue-400 px-3 py-1 rounded-md text-white"><i class="fa-regular fa-folder-open"></i> Chọn Hình Ảnh</button>
                        </div>
                        <input type="file" class="hidden">
                    </div>
                    <div class="grid grid-cols-3 gap-x-3">
                        <div class="form-group">
                            <label>Tên sản phẩm<span class="text-red-500 ms-1">*</span></label>
                            <input type="text" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                        </div>
                        <div class="form-group">
                            <label>Mã Sản Phẩm<span class="text-red-500 ms-1">*</span></label>
                            <input type="text" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                        </div>
                        <div class="form-group">
                            <label>Hãng Sản Xuất<span class="text-red-500 ms-1">*</span></label>
                            <select name="" id="" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                                <option value="">Apple</option>
                                <option value="">Iphone</option>
                                <option value="">Samsung</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Trạng Thái Còn Hàng<span class="text-red-500 ms-1">*</span></label>
                            <select name="cong_hang" id="cong_hang" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                                <option value="1">Còn hàng</option>
                                <option value="0">Hết hàng</option>
                            </select>
                        </div>                        
                        <div class="form-group">
                            <label>Màn Hình<span class="text-red-500 ms-1">*</span></label>
                            <input type="text" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                        </div>
                        <div class="form-group">
                            <label>Camera Trước<span class="text-red-500 ms-1">*</span></label>
                            <input type="text" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                        </div>
                        <div class="form-group">
                            <label>Camera Sau<span class="text-red-500 ms-1">*</span></label>
                            <input type="text" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                        </div>
                        <div class="uppercase">
                            <label>Hệ Điều Hành<span class="text-red-500 ms-1">*</span></label>
                            <select name="" id="" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                                <option value="">IOS</option>
                                <option value="">Android</option>
                            </select>
                        </div>
                        <div class="uppercase">
                            <label>cpu<span class="text-red-500 ms-1">*</span></label>
                            <input type="text" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                        </div>
                        <div class="uppercase">
                            <label>gpu<span class="text-red-500 ms-1">*</span></label>
                            <input type="text" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                        </div>
                        <div class="form-group">
                            <label>RAM<span class="text-red-500 ms-1">*</span></label>
                            <input type="text" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                        </div>
                        <div class="form-group">
                            <label>ROM<span class="text-red-500 ms-1">*</span></label>
                            <input type="text" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                        </div>
                        <div class="form-group">
                            <label>PIN<span class="text-red-500 ms-1">*</span></label>
                            <input type="text" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center mt-3">
                <button type="button" class="outline-none bg-[#1ab382] rounded-md text-white px-2 py-2"><i class="fa-solid fa-plus"></i> Thêm Thông Tin Sản Phẩm</button>
            </div>
        </div>

            <!-- Phần 2: Thông tin màu sắc và giá sản phẩm -->
            <div class="bg-white px-4 pt-3 pb-3 rounded-md mt-4" style="border-top:3px solid rgb(0, 115, 255)">
                <div class="flex justify-between items-center">
                    <h5 class="text-xl">Thông tin màu sắc và giá sản phẩm</h5>
                    <i class="fa-solid fa-minus cursor-pointer toggle-details"></i>
                </div>
                <div class="details-section">
                    <div class="border rounded-md mt-2">
                        <div class="bg-[#f1f1f1] px-3 py-3 flex justify-end rounded-tl-md rounded-tr-md gap-x-3 cursor-pointer">
                            <i class="fa-solid fa-minus"></i>
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <form>
                            <div class="grid grid-cols-3 gap-3 px-3 py-3">
                                <div>
                                    <label>Màu Sắc<span class="text-red-500 ms-1">*</span></label>
                                    <input type="text" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                                </div>
                                <div>
                                    <label>Số Lượng<span class="text-red-500 ms-1">*</span></label>
                                    <input type="text" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                                </div>
                                <div>
                                    <label>Giá Nhập (VNĐ)<span class="text-red-500 ms-1">*</span></label>
                                    <input type="text" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                                </div>
                                <div>
                                    <label>Giá Bán (VNĐ)<span class="text-red-500 ms-1">*</span></label>
                                    <input type="text" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                                </div>
                                <div>
                                    <label>Giá Khuyến Mãi (VNĐ)<span class="text-red-500 ms-1">*</span></label>
                                    <input type="text" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                                </div>
                                <div>
                                    <label>Ngày Bắt Đầu Khuyến Mãi<span class="text-red-500 ms-1">*</span></label>
                                    <input type="date" name="discount_start_date" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                                </div>
                                <div>
                                    <label>Ngày Kết Thúc Khuyến Mãi<span class="text-red-500 ms-1">*</span></label>
                                    <input type="date" name="discount_end_date" class="mt-1 outline-none p-2 block w-full rounded-md shadow-sm focus:border-black border-gray-300 border-[1px]">
                                </div>
                            </div>
                            <div class="px-3 py-3">
                                <label>Hình Ảnh Chi Tiết<span class="text-red-500 ms-1">*</span></label>
                                <div class="border border-gray-300 h-[250px] mt-3 rounded-sm flex justify-center items-center">
                                    Kéo và thả tập tin vào đây...
                                </div>
                                <button class="bg-blue-300 px-3 py-1 mt-3 text-white rounded-sm"><i class="fa-regular fa-folder-open"></i> Browser...</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex justify-center items-center mt-3">
                    <button type="button" class="outline-none bg-[#1ab382] rounded-md text-white px-2 py-2"><i class="fa-solid fa-plus"></i> Thêm Màu Sắc Sản Phẩm</button>
                </div>
            </div>

            <!-- Phần 3: Cấu hình chi tiết -->
            <div class="bg-white pb-3 rounded-md mt-4">
                <div class="mb-5 inline-block pt-3 px-4" style="border-top: 3px solid rgb(0, 115, 255);">
                    Bài Viết Sản Phẩm
                </div>
                <div class="px-4">
                    {{-- <textarea name="editor1"></textarea> --}}
                    <textarea name="content" id="editor"></textarea>
                </div>
            </div>
            <div class="bg-white py-3 px-4 mt-2 rounded-md flex justify-end gap-x-2">
                <button class="bg-red-400 text-white px-3 py-1 rounded-sm"><i class="fa-solid fa-ban"></i> Hủy</button>
                <button type="submit" class="bg-[#1ab382] text-white px-3 py-1 rounded-sm"><i class="fa-solid fa-file-lines"></i> Lưu Sản Phẩm</button>
            </div>
        </form>
        
        {{-- <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('editor1');
            document.getElementById('cke_notification_message').style.display = 'none';
        </script> --}}
        <!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/i87napbjlo69gt0g6u4nuzujusseulyl6uxvjw01ndn9npmr/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
    tinymce.init({
        selector: 'textarea',
        plugins: [
            'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
            'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown',
        ],
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
    });
</script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Toggle "Thông tin Sản Phẩm"
                document.querySelector('.toggle-info').addEventListener('click', function() {
                    const detailsSection = document.querySelector('.product-details');
                
                    if (detailsSection.style.display === "none" || detailsSection.style.display === "") {
                        detailsSection.style.display = "block"; // Hiện phần chi tiết
                        this.classList.remove('fa-plus');
                        this.classList.add('fa-minus');
                    } else {
                        detailsSection.style.display = "none"; // Ẩn phần chi tiết
                        this.classList.remove('fa-minus');
                        this.classList.add('fa-plus');
                    }
                });
            
                // Toggle "Thông tin màu sắc và giá sản phẩm"
                document.querySelectorAll('.toggle-details').forEach(function(toggleButton) {
                    toggleButton.addEventListener('click', function() {
                        const detailsSection = this.parentElement.nextElementSibling;
                    
                        if (detailsSection.style.display === "none" || detailsSection.style.display === "") {
                            detailsSection.style.display = "block"; // Hiện phần chi tiết
                            this.classList.remove('fa-plus');
                            this.classList.add('fa-minus');
                        } else {
                            detailsSection.style.display = "none"; // Ẩn phần chi tiết
                            this.classList.remove('fa-minus');
                            this.classList.add('fa-plus');
                        }
                    });
                });
            });
            $(document).ready(function() {
                // Toggle "Thông tin Sản Phẩm"
                $('.toggle-info').on('click', function() {
                    $('.product-details').slideToggle(); // Hiệu ứng trượt lên/xuống
                    $(this).toggleClass('fa-minus fa-plus'); // Thay đổi icon khi ẩn/hiện
                });
            
                // Toggle "Thông tin màu sắc và giá sản phẩm"
                $('.toggle-details').on('click', function() {
                    $(this).parent().next('.details-section').slideToggle(); // Hiệu ứng trượt lên/xuống
                    $(this).toggleClass('fa-minus fa-plus'); // Thay đổi icon khi ẩn/hiện
                });
            });

        </script>
@endsection
