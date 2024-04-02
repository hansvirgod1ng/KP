@extends('layouts.main')

@section('background')
<div
   class="bg-[#648414]/50 bg-[url('../img/company/program.jpg')] bg-black/60 bg-blend-soft-light bg-cover bg-center"
>
@endsection

@section('page')

            <!-- Hero Section -->
            <section class="hero pt-[80px] pb-[120px] mb-[50px] text-white">
                <div class="flex flex-col container-lg px-20 text-center">
                    <h1
                        class="text-5xl whitespace-normal leading-normal font-black mb-2"
                    >
                        Our Programs
                    </h1>
                    <p class="text-3xl font-bold">
                        Mandarin Language And Cultural Programs
                    </p>
                </div>
            </section>
        </div>

        <!-- Our Programs -->
        <section class="container-lg px-5 md:px-10 lg:px-20 py-[80px]">
            @if($categories->isEmpty())
            <div class="w-full text-xl text-center py-5 font-light">
                <p>Wow, it looks like we don't have any programs to share right now. Stay tuned for excellent programs and services!</p>
            </div>
            @endif

            <!-- List Program -->
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 mb-10">

                @foreach ($categories as $category)
                <a
                class="flex flex-col rounded-2xl shadow-md relative overflow-hidden hover:translate-y-[-12px] hover:shadow-xl transition-all"
                href="/programs/{{$category->slug}}"
                >
                    <img
                        class="w-[100%] h-[200px] object-cover"
                        src="{{ $category->image }}"
                        alt=""
                    />
                
                    <div class="p-5 flex-grow">
                        <p class="text-xl font-bold mb-2">{{$category->name}}</p>
                        <p class="text-sm font-light">{{ $category->description }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </section>

@endsection