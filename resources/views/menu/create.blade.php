@extends('layouts.app')

@section('title', 'Menu')

<div class="flex flex-col justify-center min-h-screen py-12 mx-auto bg-gray-50 sm:px-6 lg:px-8">
    <div class="grid gap-4 mx-auto sm:grid-cols-none md:grid-cols-2 lg:grid-cols-5">
        <div class="mx-1 lg:col-span-2">
            <div class="mt-20 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="px-4 py-8 bg-white rounded-lg shadow sm:px-10">
                    <div class="flex justify-center my-2">
                        <a class="inline-block px-3 py-1 flex-auto rounded-lg shadow-lg text-center bg-yellow-400 hover:bg-yellow-300 hover:-translate-y-0.5 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-yellow-400 focus:ring-opacity-70 active:bg-yellow-500 transform transition" href="{{ route('menu.index') }}">Menu</a>
                    </div>
                    <div class="flex justify-center my-2">
                        <a class="inline-block px-3 py-1 flex-auto rounded-lg shadow-lg text-center bg-yellow-400 hover:bg-yellow-300 hover:-translate-y-0.5 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-yellow-400 focus:ring-opacity-70 active:bg-yellow-500 transform transition" href=" {{ route('menu.create') }}">Ajouter</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-1 lg:col-span-3">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <h2 class="mt-6 text-3xl font-extrabold leading-9 text-center text-gray-900">
                    Nouvelle pizza
                </h2>
            </div>
        
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                @livewire('pizzaform')   
            </div>
        </div>
    </div>
</div>

