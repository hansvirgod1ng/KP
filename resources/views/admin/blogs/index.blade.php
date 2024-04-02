@extends('admin.layouts.main')
@section('style')
<link
    href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"
    rel="stylesheet"
/>
<!--Responsive Extension Datatables CSS-->
<link
    href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css"
    rel="stylesheet"
/>

<style>
    /*Overrides for Tailwind CSS */

    /*Form fields*/
    .dataTables_wrapper select,
    .dataTables_wrapper .dataTables_filter input {
        color: #4a5568;
        /*text-gray-700*/
        padding-left: 1rem;
        /*pl-4*/
        padding-right: 1rem;
        /*pl-4*/
        padding-top: 0.5rem;
        /*pl-2*/
        padding-bottom: 0.5rem;
        /*pl-2*/
        line-height: 1.25;
        /*leading-tight*/
        border-width: 2px;
        /*border-2*/
        border-radius: 0.25rem;
        border-color: #edf2f7;
        /*border-gray-200*/
        background-color: #edf2f7;
        /*bg-gray-200*/
    }

    /*Row Hover*/
    table.dataTable.hover tbody tr:hover,
    table.dataTable.display tbody tr:hover {
        background-color: #ebf4ff;
        /*bg-indigo-100*/
    }

    /*Pagination Buttons*/
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        font-weight: 700;
        /*font-bold*/
        border-radius: 0.25rem;
        /*rounded*/
        border: 1px solid transparent;
        /*border border-transparent*/
    }

    /*Pagination Buttons - Current selected */
    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        color: #fff !important;
        /*text-white*/
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1),
            0 1px 2px 0 rgba(0, 0, 0, 0.06);
        /*shadow*/
        font-weight: 700;
        /*font-bold*/
        border-radius: 0.25rem;
        /*rounded*/
        background: #648414 !important;
        /*bg-indigo-500*/
        border: 1px solid transparent;
        /*border border-transparent*/
    }

    .dataTables_wrapper
        .dataTables_paginate
        .paginate_button.disabled:hover {
        color: #fff !important;
    }

    /*Pagination Buttons - Hover */
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        color: #fff !important;
        /*text-white*/
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1),
            0 1px 2px 0 rgba(0, 0, 0, 0.06);
        /*shadow*/
        font-weight: 700;
        /*font-bold*/
        border-radius: 0.25rem;
        /*rounded*/
        background: #839d43 !important;
        /*bg-indigo-500*/
        border: 1px solid transparent;
        /*border border-transparent*/
    }

    /*Add padding to bottom border */
    table.dataTable.no-footer {
        border-bottom: 1px solid #e2e8f0;
        /*border-b-1 border-gray-300*/
        margin-top: 0.75em;
        margin-bottom: 0.75em;
    }

    /*Change colour of responsive icon*/
    table.dataTable.dtr-inline.collapsed
        > tbody
        > tr
        > td:first-child:before,
    table.dataTable.dtr-inline.collapsed
        > tbody
        > tr
        > th:first-child:before {
        background-color: #667eea !important;
        /*bg-indigo-500*/
    }
</style>
@endsection
    
@section('content')
    
        <div
            class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between"
        >
            <div class="mr-6">
                <h1 class="text-4xl font-semibold mb-2">Blog</h1>
                <h2 class="text-gray-600 ml-0.5">
                    Blog & Announcement
                </h2>
            </div>
            <!-- bg-[#648414] hover:bg-[#506a10] -->
            <div class="flex flex-wrap items-start justify-end -mb-3">
                <a
                    href="blogs/create"
                    class="inline-flex px-5 py-3 text-white bg-[#648414] hover:bg-[#506a10] rounded-md ml-6 mb-3"
                >
                    <svg
                        aria-hidden="true"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                        />
                    </svg>
                    Create new blog
                </a>
            </div>
        </div>

        @if(session()->has('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success!</span> {{session('success')}}
        </div>
        
        @endif
        <section>
            <div class="flex flex-col bg-white shadow rounded-lg">
                <div
                    class="px-6 py-5 font-semibold border-b border-gray-100"
                >
                    List Blog
                </div>
                <div class="p-4 flex-grow">
                    <!--Card-->

                    <table
                        id="example"
                        class="stripe hover"
                        style="
                            width: 100%;
                            padding-top: 1em;
                            padding-bottom: 1em;
                        "
                    >
                        <thead>
                            <tr>
                                <th data-priority="1">No</th>
                                <th data-priority="2">Title</th>
                                <th data-priority="3">About</th>
                                <th data-priority="4">Image</th>
                                <th data-priority="5">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $blogs as $blog)                            
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->excerpt }}</td>
                                <td>
                                    @if($blog->image)
                                    <img class="w-10 h-10" src="{{ URL::asset('storage/' . $blog->image) }}" alt="">
                                    @else
                                    No Image
                                    @endif
                                </td>
                                <td >
                                    <div class="flex gap-2 justify-center items-center">
                                        <a
                                            href="/dashboard/blogs/{{$blog->slug}}/edit"
                                            class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                        >
                                            Edit
                                        </a>
                                        
                                        <form action="/dashboard/blogs/{{$blog->slug}}" method="post" class="inline">
                                            @method('delete')
                                            @csrf
                                            <button 
                                                onclick="return confirm('Are You Sure?')"
                                                type="submit"
                                                class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                                Delete
                                            </button>        
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    
    @endsection

@section('script')
<!-- jQuery -->
<script
    type="text/javascript"
    src="https://code.jquery.com/jquery-3.4.1.min.js"
></script>

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function () {
        var table = $("#example")
            .DataTable({
                responsive: true,
            })
            .columns.adjust()
            .responsive.recalc();
    });
</script>
@endsection

