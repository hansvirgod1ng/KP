@extends('admin.layouts.main')

@section('content')

<div
    class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between"
>
    <div class="mr-6">
        <h1 class="text-4xl font-semibold mb-2">
            Welcome To Dashboard
        </h1>
        
    </div>
</div>
<section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">

    <div
        class="flex items-center p-8 bg-white shadow rounded-lg"
    >
        <div
            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6"
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
                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                />
            </svg>
        </div>
        <div>
            <span class="block text-2xl font-bold">{{ $totalBlogs }}</span>
            <span class="block text-gray-500">Total Blogs</span>
        </div>
    </div>
    <div
        class="flex items-center p-8 bg-white shadow rounded-lg"
    >
        <div
            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-yellow-600 bg-yellow-100 rounded-full mr-6"
        >
            <svg
                aria-hidden="true"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                class="h-6 w-6"
            >
                <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                <path
                    fill="#fff"
                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                />
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                />
            </svg>
        </div>
        <div>
            <span class="block text-2xl font-bold">{{ $totalPrograms }}</span>
            <span class="block text-gray-500"
                >Total Programs</span
            >
        </div>
    </div>
</section>

@endsection