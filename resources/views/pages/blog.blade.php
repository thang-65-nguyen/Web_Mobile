@extends('layouts.index')
@section('title', 'Tin tức công nghệ cập nhật 24h mới nhất - Sforum')
@section('content')
    <h3 class="text-2xl font-bold border-b-4 border-[#cc051c] pb-2 inline-block uppercase">Nổi bật nhất</h3>
    @if($blogs->isNotEmpty())
        @php
            $featuredBlogs = $blogs->where('is_featured',0);
            $featuredBlog = $featuredBlogs->first();
            $otherBlogs = $blogs->skip(1); 
        @endphp
        @if($featuredBlog)
            <div class="flex gap-[15px] w-full mt-5">
                <div class="flex-1 relative text-white">
                    <img src="{{ asset('storage/' . $featuredBlog->image) }}" class="w-full h-full object-cover rounded-md" alt="">
                    <div class="absolute bottom-5 right-5 left-5">
                        <a href="{{route('pages.blog.show',[$featuredBlog->id])}}" class="font-semibold text-xl">{{ $featuredBlog->title }}</a>
                        <div class="flex gap-x-3 items-center mt-3 text-sm">
                            <p><i class="fa-regular fa-circle-user"></i> {{ $featuredBlog->author }}</p>
                            <p><i class="fa-regular fa-clock"></i> {{ $featuredBlog->created_at->format('d/m/Y H:i') }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 flex-1 gap-y-3">
                    @foreach($otherBlogs->take(3) as $blog)
                    <a href="{{route('pages.blog.show',[$blog->id])}}" class="flex gap-x-3 items-center h-[100px]">
                        <div class="w-[140px] h-full aspect-[16/10] relative block flex-shrink-0">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="w-full h-full object-cover rounded-md">
                        </div>
                        <div class="flex flex-wrap gap-y-3">
                            <span class="font-semibold">{{ $blog->title }}</span>
                            <div class="flex gap-x-3 items-center text-sm">
                                <p><i class="fa-regular fa-circle-user"></i> {{ $blog->author }}</p>
                                <p><i class="fa-regular fa-clock"></i> {{ $blog->created_at->format('d/m/Y H:i') }}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        @else
            <p>Không có bài viết nổi bật.</p>
        @endif
    @else
        <p>Chưa có bài viết nào.</p>
    @endif
    <div class="flex gap-x-4">
        <div class="w-[800px]">
            <h3 class="text-2xl font-bold border-b-4 border-[#cc051c] pb-2 inline-block mt-8 uppercase">tin tức mới nhất</h3>
            <div class="grid grid-cols-1 flex-1 mt-6">
                @foreach($blogs as $blog)
                    <div class="flex gap-x-3 mb-3 items-center">
                        <a href="#" class="w-[200px] h-full aspect-[16/10] relative block flex-shrink-0">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="w-full h-full object-cover rounded-md">
                        </a>
                        <div>
                            <span class="font-semibold block text-ellipsis overflow-hidden whitespace-nowrap w-[560px]">{{ $blog->title }}</span>
                            <span class="font-normal block">{{ Str::limit(html_entity_decode(strip_tags($blog->content)), 150, '...') }}</span
                            <p class="font-normal"><i class="fa-regular fa-clock"></i> {{ $blog->created_at->format('d/m/Y H:i') }}</p>
                        </div>
                    </div>
                @endforeach
                <a href="" class="text-center mt-2">
                    <button class="underline font-semibold">Xem thêm <i class="fa-solid fa-angle-down"></i></button>
                </a>
            </div>
        </div>
        <div class="flex-1">
            @if($blogs->isNotEmpty())
                @php
                    $promotionBlogs = $blogs->where('is_promotion',0);
                    $promotionBlog = $promotionBlogs->first();
                    $otherPromotionBlogs = $promotionBlogs->skip(1)->take(2); 
                @endphp
                <h3 class="text-2xl font-bold border-b-4 border-[#cc051c] pb-2 inline-block mt-8 uppercase">Khuyến mãi</h3>
                @if($promotionBlog)
                    <div class="grid grid-cols-1">
                        <div class="mt-6">
                            <div class="w-full">
                                <img src="{{ asset('storage/' . $promotionBlog->image) }}" class="w-full h-full rounded-lg" alt="">
                            </div>
                            <span class="font-semibold">{{ $promotionBlog->title }}</span>
                        </div>
                        <div class="grid grid-cols-2 gap-x-4 mt-4">
                            @foreach($otherPromotionBlogs as $blog)
                            <div>
                                <div>
                                    <img src="{{ asset('storage/' . $blog->image) }}" class="w-full h-[120px] rounded-lg" alt="">
                                </div>
                                <span class="font-semibold line-clamp-3">{{ $blog->title }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <p>Không có bài viết nổi bật.</p>
                @endif
            @else
                <p>Không có bài viết nào</p>
            @endif
        </div>
    </div>
@endsection