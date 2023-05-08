<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forums || DevTools</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="from-pink-300">
    <nav class="flex flex-wrap items-center justify-between p-5 bg-blue-200">
        <!-- logo -->
        <img src="http://acmelogos.com/images/logo-1.svg" alt="ACME" width="120" />

        <!-- hamburger -->
        <div class="flex md:hidden">
            <button id="hamburger">
                <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png"
                    width="40" height="40" />
                <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png"
                    width="40" height="40" />
            </button>
        </div>
        <!-- links -->

        <div
            class="toggle hidden md:flex w-full md:w-auto text-right text-bold mt-5 md:mt-0 border-t-2 border-blue-900 md:border-none">
            {{-- <a href="#"
                class="block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Home</a> --}}
            <a href="{{ 'Allposts' }}"
                class="block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">All
                Posts</a>
            <a href="{{ 'About' }}"
                class="block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">About</a>
            <a href="{{ 'contact' }}"
                class="block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Contact</a>
        </div>
        <!-- cta -->
        <a href="{{ '/registre' }}"
            class="toggle hidden md:flex w-full md:w-auto px-4 py-2 text-right bg-blue-900 hover:bg-blue-500 text-white md:rounded">Create
            Account</a>

    </nav>