<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>{{ $title }}</title>

        <script src="https://cdn.tailwindcss.com"></script>

        @yield('style')
    </head>
    <body class="flex bg-gray-100 min-h-screen">
        <aside class="flex flex-col">
            <a
                href="#"
                class="inline-flex items-center justify-center h-20 bg-[#648414] hover:bg-[#506a10]"
            >
                <img class="h-12 w-12" src={{URL::asset("img/admin/logowhite.png")}} alt="" />
                <!-- <svg fill="none" viewBox="0 0 64 64" class="h-12 w-12"></svg> -->
            </a>
            <div
                class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800"
            >
                <nav class="flex flex-col mx-4 my-6 space-y-4">
                    <a
                        href="/dashboard"
                        class="flex flex-col items-center justify-center px-1 py-3  {{ ($page === 'dashboard') ? 'text-white bg-[#648414]' : ' hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700' }} rounded-lg"
                    >
                        <svg
                            aria-hidden="true"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            class="h-6 w-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                            />
                        </svg>

                        <p class="text-white font-light text-xs">Dashboard</p>
                    </a>
                    <a
                        href="/dashboard/programs"
                        class="flex flex-col items-center justify-center py-3 {{ ($page === 'programs') ? 'text-white bg-[#648414]' : 'hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700' }} rounded-lg"
                    >
                        <svg
                            aria-hidden="true"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            class="h-6 w-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"
                            />
                        </svg>
                        <p class="text-white font-light text-xs">Program</p>
                    </a>

                    <a
                        href="/dashboard/blogs"
                        class="flex flex-col items-center justify-center py-3 {{ ($page === 'blogs') ? 'text-white bg-[#648414]' : 'hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700' }} rounded-lg"
                    >
                        <svg
                            aria-hidden="true"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            class="h-6 w-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"
                            />
                        </svg>
                        <p class="text-white font-light text-xs">Blogs</p>
                    </a>
                </nav>
            </div>
        </aside>
        <div class="flex-grow text-gray-800">
            <header class="flex items-center h-20 px-6 sm:px-10 bg-white">
                <div class="flex flex-shrink-0 items-center ml-auto">
                    <div
                        class="hidden md:flex md:flex-col md:items-end md:leading-tight"
                    >
                        <span class="font-semibold">{{ auth()->user()->name }}</span>
                        <span class="text-sm text-gray-600">Logged in</span>
                    </div>
                    <span
                        class="h-12 w-12 ml-2 sm:ml-3 mr-2 bg-gray-100 rounded-full overflow-hidden"
                    >
                        <img
                            src={{URL::asset("img/admin/profile.png")}}
                            alt="user profile photo"
                            class="h-full w-full object-cover"
                        />
                    </span>

                    <div class="border-l pl-3 ml-3 space-x-1">
                        <form action="/logout" method="post">
                            @csrf
                            <button 
                                type="submit"
                                class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full"
                            >
                                <span class="sr-only">Log out</span>
                                <svg
                                    aria-hidden="true"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    class="h-6 w-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                                    />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </header>
            <main class="p-6 sm:p-10 space-y-6">
                @yield('content')
            </main>
        </div>
        @yield('script')
    </body>
</html>
