<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Login</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="flex md:items-center justify-center h-screen">
        <div class="max-w-100% md:max-w-sm lg:max-w-xs">
            <form class="w-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/hd-admin" method="post">
                @csrf
                <div class="mb-5 flex justify-center items-center ">
                    <img src="img/admin/Logo Hongde.png" alt="" class="w-1/2 h-1/2"/>
                </div>
                <div class="mb-4">
                    <label
                        class="block text-gray-700 text-sm font-bold mb-2"
                        for="email"
                    >
                        Email
                    </label>
                    <input
                        class="shadow appearance-none border @error('email') border-red-600 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email"
                        type="email"
                        name="email"
                        placeholder="email@gmail.com"
                        value="{{old('email')}}"
                    />

                    @error('email')
                    <p class="text-red-500 text-xs italic">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label
                        class="block text-gray-700 text-sm font-bold mb-2"
                        for="password"
                    >
                        Password
                    </label>
                    <input
                        class="shadow appearance-none border @error('password') border-red-600 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="password"
                        name="password"
                        type="password"
                        placeholder="******************"
                    />
                    
                    @error('password')
                    <p class="text-red-500 text-xs italic">
                        {{$message}}
                    </p>
                    @enderror
                    @if(session()->has('loginError'))
                    <p class="text-red-500 text-xs italic">
                        {{ session('loginError')}}
                    </p>
                @endif
                </div>
                
                    
                <div class="flex items-center justify-center">
                    <button
                        class="bg-[#648414] hover:bg-[#506a10] w-full text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit"
                    >
                        Sign In
                    </button>
                </div>
            </form>
            <p class="text-center text-gray-500 text-xs">
                &copy;2023 Hongde College. All rights reserved.
            </p>
        </div>
    </body>
</html>
