@extends('layouts.app')

@section('title', 'New pizza')

<div class="flex flex-col justify-center min-h-screen py-12 mx-auto bg-yellow-50 sm:px-6 lg:px-8">
    <x-top-bar />
    <div class="grid gap-4 mx-auto sm:grid-cols-none md:grid-cols-2 lg:grid-cols-5">
        <x-side-menu />
        <div class="mx-1 lg:col-span-3">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <h2 class="mt-6 font-serif text-3xl font-extrabold leading-9 text-center text-yellow-900">
                    New Pizza
                </h2>
            </div>
        
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                @livewire('pizzaform')   
            </div>
        </div>
    </div>
</div>

