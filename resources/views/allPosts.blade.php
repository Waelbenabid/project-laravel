@extends('layouts.AllPost')

@section('fofofo')


    <form class="mt-6 w-8/12 m-auto" action="/PostController@create" method="POST">
        @csrf
        @method('POST')
        <label for="title" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Title</label>
        <input type="title" name="title" placeholder="Titre de Post"
            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
            required />
        {{-- @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif --}}
        <label for="tags" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Topics</label>
        <input type="text" name="tags" placeholder="PHP JS PYTHON VUE ..."
            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
            required />
        <label for="description" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Description</label>
        <input type="text" name="description" placeholder="type somehting useful here !"
            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
            required />
        <button type="submit"
            class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
            Post
        </button>
    </form>

    <div class="flex-col justify-center items-center bg-gray-100">
        {{-- @foreach ($posts as $post) --}}
        <div class="w-11/12  overflow-hidden rounded-lg shadow-2xl mt-10 bg-white">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">
                    <h2 class="font-bold mt-2 text-2xl text-black">
                        {{-- {{ $post->titre }} --}}
                    </h2>
                    <h3 class="text-blue-300 mt-4 text-sm font-bold">
                        {{-- {{ $post->auteur }} --}}
                    </h3>
                </div>

                <p class="text-gray-700 text-base">
                    {{-- {{ \Illuminate\Support\Str::limit($post->description, 40) }} --}}
                </p>
                <div class="px-6 py-4">
                    {{-- @foreach ($posts as $tag) --}}
                    <a href="">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                            {{-- #{{ $tag->tag }} --}}
                        </span>
                    </a>

                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>

    <!-- horizontal card -->

@endsection
