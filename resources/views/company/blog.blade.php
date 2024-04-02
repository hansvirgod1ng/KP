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

        <!-- List Blog -->

        <section class="container-lg px-5 md:px-10 lg:px-[160px] py-[100px]">
            <div class="flex flex-col gap-10 mb-10">
                @if($blogs->isEmpty())
                <div class="w-full text-xl py-5 font-light text-center">
                    <p>Wow, it looks like we don't have any blogs or announcements to share right now. Stay tuned for exciting updates and inspiring stories!</p>
                </div>
                @endif
                @foreach($blogs as $blog)
                <a
                    href="blogs/{{$blog->slug}}"
                    class="flex flex-col md:flex-row rounded-2xl shadow-md overflow-hidden hover:translate-y-[-12px] hover:shadow-xl transition-all"
                >
                    <img
                        class="w-100 h-60 md:h-auto md:w-[380px] object-cover"
                        @if($blog->image)
                        src="{{ URL::asset('storage/' . $blog->image) }}"
                        @else
                        src="img/blog/blog.jpg"
                        @endif
                        alt=""
                    />

                    <div class="p-16 flex flex-col gap-4">
                        <p class="text-2xl font-bold">{{ $blog->title }}</p>
                        <p class="text-sm font-light flex-grow">
                            {{$blog->excerpt}}
                        </p>
                        <p class="text-xs font-light flex-grow">{{ date('j F Y', strtotime($blog->created_at)) }}</p>
                    </div>
                </a>
                @endforeach

                
            </div>
            {{$blogs->links()}}
        </section>
        
@endsection