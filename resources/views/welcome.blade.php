@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center min-h-screen py-12 bg-center bg-cover sm:px-6 lg:px-8" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/slider-img-1.jpg')">        
        <div class="absolute top-0 right-0 mt-4 mr-4">
            @if (Route::has('login'))
                <div class="space-x-4">
                    @auth
                        <a
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="font-medium text-yellow-600 transition duration-150 ease-in-out hover:text-yellow-500 focus:outline-none focus:underline"
                        >
                            Log out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="font-medium text-yellow-600 transition duration-150 ease-in-out hover:text-yellow-500 focus:outline-none focus:underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="font-medium text-yellow-600 transition duration-150 ease-in-out hover:text-yellow-500 focus:outline-none focus:underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <div class="flex items-center justify-center">
            <div class="flex flex-col justify-around">
                <div class="space-y-6">
                    <a href="{{ route('home') }}">
                        <h1 class="font-serif text-6xl font-semibold tracking-wider text-center md:text-8xl">
                            {{ config('app.name') }}
                        </h1>
                    </a>
                    <p class="font-serif text-xl text-center text-yellow-100 md:text-3xl">
                        One bite is never enough...
                    </p>

                    <div>
                        <div class="flex justify-center my-2">
                            <a class="font-serif inline-block px-3 py-2 w-52 rounded-xl shadow-lg text-center bg-yellow-600 hover:bg-yellow-500 hover:-translate-y-0.5 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-yellow-600 focus:ring-opacity-70 active:bg-yellow-600 transform transition duration-150 ease-in-out" href="{{ route('menu.index') }}">Check our catalog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
