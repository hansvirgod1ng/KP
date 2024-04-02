<!DOCTYPE html>
<html lang="en" class="scroll-smooth scroll-pt-[180px]">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700;900&display=swap"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <style>
            body {
                font-family: "Poppins";
            }
            ::-webkit-scrollbar {
                width: 5px;
            }
            ::-webkit-scrollbar-track {
                background-color: #e0e6d0;
                border-radius: 15px;
            }
            ::-webkit-scrollbar-thumb {
                background-color: #648414;
                border-radius: 15px;
            }
        </style>

        <!-- Tailwind CDN -->
        <script src="https://cdn.tailwindcss.com"></script>

        <title>{{ $title }}</title>
    </head>
    <body>
        <!-- Background -->
        @yield('background')
        
            <!-- Header & Navigation -->
            <header>
                <div
                    class="navbar flex justify-between items-center container-lg px-5 md:px-10 lg:px-20 h-20 text-white z-10"
                >
                    <a href="/">
                        <img
                            class="w-40 md:w-48"
                            src={{URL::asset("img/company/logo.png")}}
                            alt="logo"
                        />
                    </a>

                    <div class="flex items-center justify-end">
                        <input
                            type="checkbox"
                            name="hamburger"
                            id="hamburger"
                            class="peer"
                            hidden
                        />
                        <label
                            for="hamburger"
                            class="peer-checked:hamburger burger block relative z-20 p-6 -mr-6 cursor-pointer lg:hidden text-[#648414] text-3xl"
                        >
                            <div class="bars">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                            <div class="xmark hidden">
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                        </label>

                        <div
                            class="peer-checked:translate-x-0 fixed bg-white lg:bg-transparent inset-0 w-[calc(100%-10rem)] sm:w-[calc(100%-20rem)] md:w-[calc(100%-30rem)] translate-x-[-150%] shadow-xl transition duration-300 lg:w-auto lg:static lg:shadow-none lg:translate-x-0"
                        >
                            <div
                                class="flex flex-col h-full justify-between lg:items-center lg:flex-row"
                            >
                                <ul
                                    class="px-6 lg:px-0 pt-20 navtext text-black lg:text-white space-y-8 lg:space-y-0 lg:flex lg:space-x-12 lg:pt-0"
                                >
                                    <li>
                                        <a
                                            href="{{ route('home') }}"
                                            class="{{ ($page === 'Home') ? 'text-[#648414] border-b-2' : '' }}  hover:text-[#648414] hover:border-b-2 border-[#648414] transition-all"
                                            >Home</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            href="{{ route('about') }}"
                                            class="{{ ($page === 'About') ? 'text-[#648414] border-b-2' : '' }} hover:text-[#648414] hover:border-b-2 border-[#648414] transition-all"
                                            >About Us</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            href="{{ route('programs') }}"
                                            class="{{ ($page === 'Program') ? 'text-[#648414] border-b-2' : '' }} hover:text-[#648414] hover:border-b-2 border-[#648414] transition-all"
                                            >Programs</a
                                        >
                                    </li>

                                    <li>
                                        <a
                                            href="{{ route('blogs') }}"
                                            class="{{ ($page === 'Blog') ? 'text-[#648414] border-b-2' : '' }} hover:text-[#648414] hover:border-b-2 border-[#648414] transition-all"
                                            >Blogs</a
                                        >
                                    </li>

                                    <li>
                                        <a
                                            target="_blank"
                                            href="https://api.whatsapp.com/send?phone=6282241557755"
                                            class="bg-[#648414] hover:bg-[#506a10] text-white font-bold py-3 px-5 border border-none rounded-2xl transition-all"
                                            >Contact Us</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

           @yield('page')

        <!-- Footer -->
        <footer class="bg-[#1F1F1F]">
            <div
                class="container-lg p-20 gap-10 flex flex-col-reverse md:grid lg:gap-0 md:grid-cols-2 lg:grid-cols-3 text-white"
            >
                <!-- Logo & SosMed -->

                <div
                    class="flex flex-col gap-5 md:row-start-1 md:row-end-2 lg:row-auto"
                >
                    <div class="w-40 md:w-60">
                        <img src={{URL::asset("img/company/white-logo.png")}} alt="" />
                    </div>
                    <div class="flex gap-8 text-2xl">
                        <a target="_blank" href="https://www.instagram.com/hongde.college/"><i class="fa-brands fa-instagram"></i></a>
                        <a target="_blank" href="https://facebook.com/p/Hongde-Chinese-100076191782547/"><i class="fa-brands fa-facebook-f"></i></a>
                        <a target="_blank" href="https://www.youtube.com/@hongdecollege1231"><i class="fa-brands fa-youtube"></i></a>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=6282241557755"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                    <p class="font-light text-sm w-[200px]">
                        Copyright © 2023 by Hongde Inc. All rights reserved.
                    </p>
                </div>

                <!-- Contact Us -->
                <div class="flex flex-col gap-5">
                    <p class="text-lg font-bold">Contact Us</p>
                    <p class="font-light text-sm">
                        Komp. Ruko Superblok Imperium <br />
                        Blok B No. 25 Batam – Indonesia 29464
                    </p>
                    <a
                        href="mailto:frangky.seah@gmail.com"
                        class="font-light text-sm"
                        >frangky.seah@gmail.com</a
                    >
                    <a href="tel:+62-822-4155-7755" class="font-light text-sm"
                        >+62 822 4155 7755</a
                    >
                </div>

                <!-- Company -->
                <div
                    class="flex flex-col gap-5 md:row-start-0 md:row-end-1 lg:row-auto"
                >
                    <p class="text-lg font-bold">Company</p>
                    <a href="{{ route('about') }}" class="font-light text-sm">About Us</a>
                    <a href="{{ route('programs') }}" class="font-light text-sm">Programs</a>
                    <a href="{{ route('blogs') }}" class="font-light text-sm">Blogs</a>
                </div>
            </div>
        </footer>

        <!-- script -->
        <script src={{URL::asset("script.js")}}></script>
    </body>
</html>
