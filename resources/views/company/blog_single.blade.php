@extends('layouts.main')

@section('background')
<div
   class="bg-[#648414]/50 bg-[url('../img/company/blog.jpg')] bg-black/60 bg-blend-soft-light bg-cover bg-center"
>
@endsection

@section('page')

            <!-- Hero Section -->
            <section class="hero pt-[80px] pb-[120px] mb-[50px] text-white">
                <div
                    class="flex flex-col container-lg px-5 md:px-10 lg:px-20 text-center"
                >
                    <h1
                        class="text-5xl whitespace-normal leading-normal font-black mb-2"
                    >
                        Blog & Announcement
                    </h1>
                    <p class="text-3xl font-bold">
                        Stay Informed with Our Latest Updates
                    </p>
                </div>
            </section>
        </div>

        <!-- Blog Details -->
        <section class="container-lg px-5 md:px-10 lg:px-[160px] pb-[100px]">
            <div class="mb-16">
                <a href="../blogs" class="">< Back</a>
            </div>

            <div class="mb-8 ">
                <p class="text-5xl text-[#60625b] font-bold leading-normal ">
                    {{$blog->title}}
                </p>
                <p class="text-sm font-light">Created at {{ date('j F Y', strtotime($blog->created_at)) }}, By. Hongde College</p>
            </div>
            @if($blog->image)
            <div class="flex justify-center items-center mb-10">
                <div class="max-w-3xl overflow-hidden">
                    <img src="{{ URL::asset('storage/' . $blog->image) }}"  alt="">
                </div>
            </div>
            @endif
            <div class="flex flex-col gap-5 leading-loose">
                
                    {!! $blog->body !!}
                
            </div>
        </section>
@endsection