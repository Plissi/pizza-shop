@extends('layouts.app')

@section('title', 'Menu')

<div class="flex flex-col justify-center min-h-screen py-12 mx-auto bg-yellow-50 sm:px-6 lg:px-8">
    <x-top-bar />
    <div class="grid gap-4 mx-auto sm:grid-cols-none lg:grid-cols-5">
        <x-side-menu />
        <div class="mx-1 lg:col-span-3">
            <div class="sm:mx-auto sm:w-full sm:max-w-md md:max-w-none">
                <h2 class="mt-6 font-serif text-3xl font-extrabold leading-9 text-center text-yellow-900">
                    Menu
                </h2>
            </div>
        
            <div class="max-w-xs mt-8 sm:mx-auto sm:w-full md:max-w-none">
                <div class="px-4 py-8 bg-white rounded-lg shadow sm:px-10">
                    @if ( count($menu) == 0)
                        <div class="text-center">
                            Pas de pizzas disponible pour l'instant
                        </div>
                    @else
                        @foreach($menu as $pizza)
                            <div class="flex flex-col">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                    <div class="overflow-hidden border-b border-yellow-200 shadow sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-yellow-200">
                                        <thead class="bg-yellow-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-yellow-500 uppercase">
                                                Pizza
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-yellow-500 uppercase">
                                                Description
                                            </th>
                                            @if ($user->is_admin)
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                            @endif
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-yellow-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 w-24 h-24">
                                                    <img class="rounded-full w-60" src="{{ asset($pizza-> image) }}" alt="{{ "pizza " . $pizza -> id . "thumbnail" }}">
                                                    </div>
                                                    <div class="ml-4">
                                                    <div class="text-sm font-medium text-center text-yellow-900">
                                                        {{ $pizza -> name }}
                                                    </div>
                                                    <div class="text-sm text-yellow-500">
                                                        {{ $pizza -> price_small }} | {{ $pizza -> price_medium }} | {{ $pizza -> price_large }}
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-center text-yellow-900">
                                                    {{ $pizza -> description }}
                                                </div>
                                            </td>
                                            @if ($user -> is_admin)
                                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                </td>
                                            @endif
                                        </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>