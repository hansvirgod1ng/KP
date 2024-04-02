@extends('layouts.main')

@section('background')
<div
    class="bg-[#648414]/50 bg-[url('../img/company/hero-background.png')] bg-cover bg-center"
>
@endsection

@section('page')

            <!-- Hero Section -->
            <section class="hero pt-[24px] md:pt-[100px] pb-[120px] mb-[50px] h-screen text-white">
                <div
                    class="flex flex-col container-lg px-5 md:px-10 lg:px-20 text-center md:text-right items-center md:items-end gap-[40px] w-100"
                >
                    <h1
                        class="text-3xl md:text-4xl lg:text-5xl mb-4 lg:w-[754px] whitespace-normal text-center md:text-right font-bold leading-normal"
                    >
                        Empower Your Language Skills with
                        <span class="font-black"> Hongde College</span>
                    </h1>
                    <p class="text-xl md:text-2xl mb-4 md:w-[496px]">
                        Your path to Mandarin proficiency and a world of endless
                        possibilities
                    </p>
                    <div class="flex flex-col sm:flex-row gap-5 text-xl">
                        <a
                            href="#cta"
                            class="bg-[#648414] hover:bg-[#506a10] text-white font-bold py-3 px-10 border-2 border-[#648414] hover:border-[#506a10] rounded-2xl transition-all"
                            >Get Started</a
                        >
                        <a
                            href="about"
                            class="bg-white hover:bg-transparent text-[#648414] hover:text-white font-bold py-3 px-10 border-white border-2 rounded-2xl transition-all"
                            >Learn More</a
                        >
                    </div>
                </div>
            </section>
        </div>

        <!-- About Us -->
        <section class="container-lg px-5 md:px-10 lg:px-20 py-[100px]">
            <div class="mb-5">
                <p
                    class="text-2xl font-bold text-[#648414] text-center mb-5 lg:mb-2 lg:text-left"
                >
                    About Us
                </p>

                <div
                    class="flex flex-col-reverse gap-5 items-center text-center lg:grid lg:grid-cols-[50%_50%] xl:grid-cols-[55%_45%] lg:text-left lg:gap-5"
                >
                    <div>
                        <p
                            class="text-3xl md:text-4xl lg:text-5xl text-[#60625b] font-bold leading-normal mb-5"
                        >
                            Making Chinese Learning Creative and Fun!
                        </p>
                        <p class="w-full leading-loose mb-4">
                            Hongde College, Indonesia's premier HSK Mandarin
                            language institution, provides HSK-standard courses,
                            training, and tests online and offline since 2020.
                            Our expertise encompasses HSK exam prep, Camps,
                            China scholarships, cultural events, teacher
                            certification, and more.
                        </p>
                        <a
                            href="about"
                            class="text-md text-[#648414] font-normal underline hover:no-underline underline-offset-4  transition-all"
                            >Learn More</a
                        >
                    </div>
                    <div>
                        <img class="w-[100%]" src="img/company/about-us.png" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Programs -->
        <section class="container-lg px-5 md:px-10 lg:px-20 py-[80px]">

            <div class="text-center">
                <p class="text-2xl font-bold text-[#648414] mb-2">
                    Our Programs
                </p>
                <p
                    class="text-3xl md:text-4xl lg:text-5xl text-[#60625b] font-bold leading-normal mb-5"
                >
                    Mandarin Language and Cultural Programs
                </p>
            </div>
            <!-- List Program -->
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 mb-10">

                @if($categories->isEmpty())
                <div class="w-full text-xl py-5 font-light">
                    <p>Wow, it looks like we don't have any programs to share right now. Stay tuned for excellent programs and services!</p>
                </div>
                @endif

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

        <!-- Testimonial -->
        <section class="bg-[#F0F3E8]">
            <div class="container-lg px-5 md:px-10 lg:px-20 pt-10 pb-20">
                <div class="text-center mb-16">
                    <p
                        class="text-3xl md:text-4xl lg:text-5xl text-[#60625b] font-bold leading-normal mb-5"
                    >
                        Hear What Parents and Students Say!
                    </p>
                    <p class="text-2xl font-bold text-[#648414] mb-2">
                        Testimonials
                    </p>
                </div>
                <div
                    class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-20 text-sm lg:text-md xl:text-lg"
                >
                    <div
                        class="h-[380px] bg-white rounded-2xl px-16 flex flex-col justify-center align-center gap-12"
                    >
                        <div class="m-w-100">
                            <img src="img/company/testi.png" alt="" />
                        </div>
                        <div
                            class="px-5 h-[100px] flex justify-center items-center"
                        >
                            <p>
                                Terjamin memberikan kursus Mandarin yang
                                jempolan👍👍👍👍👍👍. Ga rugi belajar di sini,
                                laoshinya baik baik bangettttt , WAJIB kursus
                                DiHONGDE! …
                            </p>
                        </div>
                        <p class="self-end">- Jelin</p>
                    </div>
                    <div
                        class="h-[380px] bg-white rounded-2xl px-16 flex flex-col justify-center align-center gap-12"
                    >
                        <div class="m-w-100">
                            <img src="img/company/testi.png" alt="" />
                        </div>
                        <div
                            class="px-5 h-[100px] flex justify-center items-center"
                        >
                            <p>
                                Tempat yang paling tepat dan terbaik untuk
                                meningkatkan kemampuan bahasa Mandarin
                            </p>
                        </div>
                        <p class="self-end">-Lies Yenny</p>
                    </div>
                    <div
                        class="h-[380px] bg-white rounded-2xl px-16 flex flex-col justify-center align-center gap-12"
                    >
                        <div class="m-w-100">
                            <img src="img/company/testi.png" alt="" />
                        </div>
                        <div
                            class="px-5 h-[100px] flex justify-center items-center"
                        >
                            <p>
                                Luar biasa, tempat yang nyaman, dan memang
                                sistem pendidikan Mandarin yang terbaik yang
                                pernah ada. Berbeda dan hanya satu satunya di
                                Kepri 💯 karena dapat mengantarkan dan melatih
                                bakat bakat utk berkuliah di luar negri
                            </p>
                        </div>
                        <p class="self-end">-Real Music School</p>
                    </div>
                    <div
                        class="h-[380px] bg-white rounded-2xl px-16 flex flex-col justify-center align-center gap-12"
                    >
                        <div class="m-w-100">
                            <img src="img/company/testi.png" alt="" />
                        </div>
                        <div
                            class="px-5 h-[100px] flex justify-center items-center"
                        >
                            <p>
                                Dulunya anak saya masih ragu dlm bbrp hal, skrg
                                bisa dengan penuh percaya diri
                                menjawabny..laoshinya baik dan proses
                                pembelajaran yang menarik
                            </p>
                        </div>
                        <p class="self-end">-Lynd Edlin</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog -->
        <section class="container-lg px-5 md:px-10 lg:px-20 py-[100px]">
            <div class="text-center md:text-left">
                <p class="text-2xl font-bold text-[#648414] mb-2">
                    Blog & Announcement
                </p>
                <p
                    class="text-3xl md:text-4xl lg:text-5xl text-[#60625b] font-bold leading-normal mb-5"
                >
                    Stay Informed with Our Latest Updates
                </p>
            </div>
            @if($blogs->isEmpty())
            <div class="w-full text-xl py-5 font-light">
                <p>Wow, it looks like we don't have any blogs or announcements to share right now. Stay tuned for exciting updates and inspiring stories!</p>
            </div>
            @endif
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 mb-10">
                @foreach ($blogs->take(2) as $blog)
                <a
                    href="blogs/{{$blog->slug}}"
                    class="flex flex-col rounded-2xl shadow-md overflow-hidden hover:translate-y-[-12px] hover:shadow-xl transition-all"
                >
                    <div class="relative overflow-hidden">
                        <img
                            class="w-[100%] h-[200px] object-cover"
                            @if($blog->image)        
                            src="{{ URL::asset('storage/' . $blog->image) }}"
                            
                            @else
                            src="img/blog/blog.jpg"
                            @endif
                            alt=""
                        />

                        <div class="p-5">
                            <p class="text-xl font-bold">{{$blog->title}}</p>
                            <p class="text-sm font-light">
                                {{$blog->excerpt}}
                            </p>
                            <p class="text-xs font-light flex-grow pt-5">{{ date('j F Y', strtotime($blog->created_at)) }}</p>
                        </div>
                    </div>
                </a>
                @endforeach

                @if ($blogs->count() > 2)
                <a
                    href="blogs"
                    class="hidden md:flex md:flex-col rounded-2xl bg-black/50 hover:bg-black/40 bg-blend-soft-light shadow-md overflow-hidden hover:translate-y-[-12px] hover:shadow-xl transition-all"
                >
                    <div
                        class="flex flex-col justify-center items-center content-center h-full gap-5"
                    >
                        <i class="fa-solid fa-arrow-right text-6xl"></i>
                        <p class="text-lg">See More</p>
                    </div>
                </a>
            </div>
            
            <div class="md:hidden text-center" >
                <a
                    href="blogs"
                    class="text-xl text-[#648414] font-normal underline underline-offset-4 hover:no-underline transition-all"
                    >See More</a
                >
            </div>
            @endif

            
        </section >

        <!-- CTA -->
        <section id="cta" class="container-lg px-5 md:px-20 pb-[180px]">
            <div
                class="bg-[#648414] grid md:grid-cols-[60%_40%] lg:grid-cols-[70%_30%] rounded-[25px] overflow-hidden shadow-xl"
            >
                <div class="py-14 px-14 md:py-20 md:px-16 text-white text-center md:text-left">
                    <p class="text-3xl md:text-4xl lg:text-5xl font-bold mb-[30px]">
                        Start Your Journey With Us!
                    </p>
                    <p
                        class="text-xs md:text-md lg:text-lg font-light leading-normal mb-16"
                    >
                        We welcome your inquiries and partnership proposals.
                        Feel free to reach out to us for any questions,
                        collaboration ideas, or customized Mandarin language
                        solutions. Hongde College is committed to helping you
                        achieve your goals. Let's connect today and embark on a
                        journey to Chinese language and culture together.
                    </p>
                    <div
                        class="flex flex-col lg:flex-row gap-5 text-sm md:text-xl"
                    >
                        <a
                            target="_blank"
                            href="https://api.whatsapp.com/send?phone=6282241557755"
                            class="bg-[#283508] hover:bg-[#1E2806] text-white font-bold py-3 px-10 border-2 border-[#283508] hover:border-[#1E2806] rounded-2xl transition-all"
                            >Chat Now</a
                        >
                        <a
                            target="_blank"
                            href="https://maps.app.goo.gl/dfPPzTDu2ogopoCC7"
                            class="bg-white hover:bg-transparent text-[#648414] hover:text-white font-bold py-3 px-10 border-white border-2 rounded-2xl transition-all"
                            >Check Location</a
                        >
                    </div>
                </div>
                <div
                    class="bg-blend-soft-light bg-[#648414]/50 bg-[url('img/company/cta.jpg')] bg-cover bg-center"
                ></div>
            </div>
        </section>
@endsection