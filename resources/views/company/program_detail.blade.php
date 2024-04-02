@extends('layouts.main')

@section('background')
<div
   class="bg-[#648414]/50 bg-[url('../{{$category->image}}')] bg-black/60 bg-blend-soft-light bg-cover bg-center"
>
@endsection

@section('page')

            <!-- Hero Section -->
            <section class="hero pt-[80px] pb-[120px] mb-[30px] text-white">
                <div class="flex flex-col container-lg px-20 text-center">
                    <h1
                        class="text-5xl whitespace-normal leading-normal font-bold mb-2"
                    >
                        {{$category->name}}
                    </h1>
                    <p class="text-2xl font-light">
                        {{$category->description}}
                    </p>
                </div>
            </section>
        </div>

        <!-- Our Programs -->
        <section class="container-lg md:px-10 lg:px-20 py-[50px]">
            <div class="mb-5">
                <a href="../programs" class="">< Back</a>
            </div>
            <!-- List Program -->
            @if($programs->isEmpty())
            <div class="w-full text-xl text-center py-5 font-light">
                <p>Wow, it looks like we don't have any program to share right now. Stay tuned for excellent programs and services!</p>
            </div>
            @endif

        @php
            $currentIndex = 1;
        @endphp

        @foreach ($programs as  $program)
        <div class="py-20">

            <div
                class="flex flex-col-reverse gap-5 items-center text-center lg:grid lg:grid-cols-2 lg:text-left lg:gap-1"
            >
                <div>
                    <p
                        class="text-5xl text-[#60625b] font-bold leading-normal mb-5"
                    >
                        {{$currentIndex}}. {{$program->title}}
                    </p>
                    <p class="w-full leading-loose mb-4">
                        {{$program->description}}
                    </p>

                </div>
                <div class="{{ $currentIndex % 2 == 0 ? 'row-start-0 row-end-1' : '' }}">
                    <div class="flex justify-center {{ $currentIndex % 2 != 0 ? 'lg:justify-end' : 'lg:justify-start' }}">
                        <img src="{{ URL::asset('storage/' . $program->image) }}"  class="w-[80%] justify-end" alt="" />
                    </div>
                </div>
            </div>
        </div>
        @php
            $currentIndex++;
        @endphp
        @endforeach
           
        </section>

@endsection