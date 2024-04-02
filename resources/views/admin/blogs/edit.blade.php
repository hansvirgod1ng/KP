@extends('admin.layouts.main')

@section('style')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
<style>
    trix-toolbar [data-trix-button-group="file-tools"]{
        display: none;
    }
</style>
@endsection

@section('content')
    
        <div
            class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between"
        >
            <div class="mr-6">
                <a href="/dashboard/blogs" class="text-gray-600 ml-0.5">< Back</a>
            </div>
           
        </div>

        <section>
            <div class="flex flex-col bg-white shadow rounded-lg">
                <div
                    class="px-6 py-5 font-semibold border-b border-gray-100"
                >
                    Edit Blog
                </div>
                <div class="p-4 flex-grow">
                    <!--Card-->

                    <form class="w-full" action="/dashboard/blogs/{{ $blog->slug }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                          <div class="w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                              Title
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('title') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="title" type="text" name="title" placeholder="Title Blog 1" value="{{ old('title', $blog->title)  }}">

                            @error('title')
                            <p class="text-red-500 text-xs italic">{{$message}}</p>
                            @enderror
                          </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                          <div class="w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="slug">
                              Slug
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('slug') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="slug" type="text" name="slug" placeholder="title-blog-1" value="{{ old('slug', $blog->slug )}}">
                            
                            @error('slug')
                            <p class="text-red-500 text-xs italic">{{$message}}</p>
                            @enderror
                          </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                          <div class="w-full px-3 mb-6 md:mb-0">
                        
                          <label
                          for="image"
                          class="mb-2 inline-block text-neutral-700 dark:text-neutral-200"
                          >Upload Image (Maks. 3MB)</label
                        >
                        <input
                          class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary
                          @error('image') border-red-500 @enderror
                          "
                          type="file"
                          id="image"
                          name="image" />

                          <input type="hidden" name="oldImage" value="{{$blog->image}}">

                          @error('image')
                          <p class="text-red-500 text-xs italic">{{$message}}</p>
                          @enderror

                          </div>

                      </div>
                        
                        <div class="flex flex-wrap -mx-3 mb-6">
                          <div class="w-full px-3 mb-6 md:mb-0">
                            <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
                            <input id="body" type="hidden" name="body" value="{{old('body', $blog->body )}}">
                            <trix-editor input="body"></trix-editor>
                            @error('body')
                            <p class="text-red-500 text-xs italic">{{$message}}</p>
                            @enderror
                            {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                          </div>
                        </div>
                        
                        <button
                            type="submit"
                            class="inline-flex px-5 py-3 text-white bg-[#648414] hover:bg-[#506a10] rounded-md"
                        >
                            Save
                        </button>
                        
                      </form>
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
<script>
    const title = document.querySelector('#title')
    const slug = document.querySelector('#slug')

    title.addEventListener('change', function(){
        fetch('/dashboard/blogs/createSlug?title='+title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    })

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
</script>
@endsection

