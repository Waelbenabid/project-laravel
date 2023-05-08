@include('partial.header')
@yield('nav')
@yield('heading')
@yield('devider')

@yield('devider')
@yield('devider')
@yield('devider')

@yield('posts')
<div class=" mt-12">

    <h1 class="text-center text-5xl text-blue-500 font-bold">And More To Look For</h1>
    <p class="mt-4 text-black font-light text-center">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
</div>
<div class="flex justify-between shadow-sm">
    @yield('content')
</div>
<div class="p-4 bg-gray-300">
    @yield('tables')
</div>
@yield('questions')

@include('partial.footer')
