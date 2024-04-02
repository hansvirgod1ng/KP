@extends('layouts.main')

@section('background')
<div
   class="bg-[#648414]/50 bg-[url('../img/company/about-page.jpg')] bg-black/60 bg-blend-soft-light bg-cover bg-center"
>
@endsection

@section('page')

            <!-- Hero Section -->
            <section class="hero pt-[80px] pb-[120px] mb-[50px] text-white">
                <div class="flex flex-col container-lg px-20 text-center">
                    <h1
                        class="text-5xl whitespace-normal leading-normal font-black mb-2"
                    >
                        About Us
                    </h1>
                    <p class="text-3xl font-bold">
                        Discover Our Story and Mission
                    </p>
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
                            class="text-5xl text-[#60625b] font-bold leading-normal mb-5"
                        >
                            Making Chinese Learning Creative and Fun!
                        </p>
                        <p class="w-full leading-loose mb-4">
                            Hongde College is Indonesia's top institution for
                            internationally standardized HSK Mandarin language
                            education. We offer courses, training, and tests
                            based on HSK standards, both online and offline
                            since 2020. Our expertise includes HSK exam
                            preparation, Summer/Winter Camps, scholarships to
                            China, cultural events, teacher certification, and
                            more.
                        </p>
                    </div>
                    <div>
                        <img src="img/company/about-us.png" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Vision and Mission -->
        <section class="mb-[200px]">
            <div class="container-lg px-5 md:px-10 lg:px-20">
                <p
                    class="text-5xl text-[#60625b] font-bold leading-normal mb-5"
                >
                    Our Vision & Mission
                </p>
                <div class="grid md:grid-cols-2 gap-5 md:gap-20">
                    <div>
                        <p class="text-2xl font-bold text-[#648414] mb-2">
                            Vision
                        </p>
                        <p class="leading-loose mb-4">
                            To become the largest HSK-based Mandarin language
                            education institution in Indonesia that emphasizes
                            the development of culture and moral values.
                        </p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-[#648414] mb-2">
                            Mission
                        </p>
                        <ol class="leading-loose list-decimal ps-4">
                            <li>Deliver HSK-standard Mandarin education.</li>
                            <li>Foster culture and ethics.</li>
                            <li>
                                Establish a strong foundation through the
                                "learn-teach-test" three-pillar system.
                            </li>
                            <li>Enhance the well-being of staff.</li>
                            <li>
                                Engage in social initiatives to support the
                                community.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
@endsection