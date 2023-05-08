@extends('layouts.app')


@section('heading')
    <h1 class="mt-4 text-center text-7xl text-blue-500 font-bold">Forums For Developpers</h1>

@endsection



@section('devider')
    <hr class=" border-gray-300 border-b-1 w-3/4 mt-5 m-auto">
@endsection



@section('content')

    <div class="p-10 flex ">
        <!--Card 1-->
        {{-- @foreach ($posts as $post_) --}}
        <div class="flex flex-col justify-around max-w-sm rounded overflow-hidden shadow-lg p-4">
            {{-- <img class="w-full" src="{{ url('/images/blog/blog-4.jpg') }}" alt="Mountain"> --}}
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">
                    {{-- {{ $post_->auteur }} --}}hello
                </div>
                <p class="text-gray-700 text-base">
                    {{-- {{ $post_->description }} --}}hi
                </p>
            </div>
            <div class="p-1 flex justify-evenly  ">
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#
                    {{-- {{ $post_->tag }} --}}
                </span>
                <a href="PostController/{id}}}"
                    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white p-2 border border-blue-500 hover:border-transparent rounded">Read
                    More</a>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
@endsection
@section('posts')
    <!-- component -->
    <div class="container bg-gray-200 flex shadow-xl">
        <div class="bg-gray-100 lg:py-12 lg:flex lg:justify-center">
            <div class="bg-white lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
                <div class="lg:w-1/2">
                    <div class="h-64 bg-cover lg:rounded-lg lg:h-full"
                        style="background-image:url('{{ url('/images/team/team-1.jpg') }}')">
                    </div>
                </div>
                <div class="py-12 px-6 max-w-xl lg:max-w-5xl lg:w-1/2">
                    <h2 class="text-3xl text-gray-800 font-bold">Build Your New <span class="text-indigo-600">Idea</span>
                    </h2>
                    <p class="mt-4 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem modi
                        reprehenderit vitae exercitationem aliquid dolores ullam temporibus enim expedita aperiam mollitia
                        iure consectetur dicta tenetur, porro consequuntur saepe accusantium consequatur.</p>
                    <div class="mt-8">
                        <a href="#" class="bg-gray-900 text-gray-100 px-5 py-3 font-semibold rounded">Start Now</a>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .sidbar {
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                align-items: center;
                --tw-bg-opacity: 1;
                background-color: rgba(243, 244, 246, var(--tw-bg-opacity));
                padding: 1rem;
            }

            aside {
                text-align: center;
                padding: 2rem;
                font-family: cursive;
                font-weight: lighter;
                color: #8080807d;
            }

        </style>
        <p class=" opacity-0">L</p>
        <div class="sidbar w-4/12">
            <aside>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nemo cupiditate, beatae necessitatibus
                architecto quisquam blanditiis dicta? Quo ad eos sint et qui!
            </aside>
            <ul>
                <li><a href=""> #JavaScript</a></li>
                <li><a href="">#OOP</a></li>
                <li><a href=""> #PHP</a></li>
                <li><a href=""> #VUE JS</a></li>
                <li><a href=""> #HTML CSS</a></li>
            </ul>
        </div>
    </div>
@endsection

@section('tables')
    <div class="container flex justify-between p-2">
        <table class="table-auto w-3/4">
            <thead>
                <tr>
                    <th class="px-4 py-2">Author</th>
                    <th class="px-4 py-2">Posts</th>
                    <th class="px-4 py-2">Tags</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($posts as $post_) --}}
                    <tr>
                        <td class="border px-4 py-2">
                            {{-- {{ $post_->auteur }} --}}
                        </td>
                        <td class="border px-4 py-2">
                            {{-- {{ $post_->id_post }} --}}
                        </td>
                        <td class="border px-4 py-2">
                            {{-- {{ $post_->tag }} --}}
                        </td>
                    </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
        <h1 class="opacity-0">LL</h1>
        <div class="sidbar w-4/12">
            <aside>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nemo cupiditate, beatae necessitatibus
                architecto quisquam blanditiis dicta? Quo ad eos sint et qui!
            </aside>
            <ul>
                <li><a href=""> #JavaScript</a> </li>
                <li><a href="">#OOP</a></li>
                <li><a href=""> #PHP</a></li>
                <li><a href=""> #VUE JS</a></li>
                <li><a href=""> #HTML CSS</a></li>
            </ul>
        </div>
    </div>

@endsection
@section('questions')

    <div class="w-full md:w-1/2 order-1 md:order-2">
        <div class="p-20 bg-orange-200">
            <h3 class="text-black font-bold mt-4">MOST ASKED QUESTIONS:</h3>
            <div class="bg-white rounded-lg shadow-2xl md:flex">
                <img src="https://images.unsplash.com/photo-1593642532744-d377ab507dc8" alt="Laptop on Desk" --}}
                    class="md:w-1/3 rounded-t-lg md:rounded-l-lg md:rounded-t-none" />
                <div class="p-6">
                    <h2 class="font-bold text-xl md:text-3xl mb-2 text-orange-700">Horizontal Card</h2>
                    <p class="text-orange-700">
                        Look at me go sideways!
                    </p>
                </div>

            </div>
        </div>
    </div>


@endsection












{{-- <div class="bg_image">
        <h1 class=" ml-10 mt-10 text-7xl text-red-900 font-bold">Forums For Developpers</h1>
    </div>
    <hr class="divide-dotted w-9/12"> --}}

{{-- <div id="model"></div> --}}
