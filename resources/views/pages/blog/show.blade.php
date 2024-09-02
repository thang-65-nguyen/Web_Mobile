@extends('layouts.index')
@section('title', $blog->title)
@section('content')
    <div class="w-[1000px] mx-auto">
        <img src="{{ asset('storage/' . $blog->image) }}" class="w-full h-[400px] object-cover rounded-3xl mt-4" alt="">
        <div class="border-2 mt-[-80px] relative border-[#f2f2f2] rounded-2xl mx-16 p-5 bg-white">
            <h1 class="text-2xl font-bold mb-5">{{ $blog->title }}</h1>
            <div class="mt-2 ">
                <p class="font-semibold text-[#e54360]">{{ $blog->author }}</p>
                <p class="text-[12px]"><i class="fa-solid fa-calendar-days text-[#4286c0]"></i> Ngày đăng: {{ $blog->created_at->format('d/m/Y') }} - Cập nhật: {{ $blog->updated_at->format('d/m/Y') }}</p>
            </div>
            {!! $blog->content !!}
        </div>
    </div>
@endsection
