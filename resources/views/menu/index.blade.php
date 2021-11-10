@extends('layouts.app')

@section('title', 'Menu')

<div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
    <div class="grid gap-4 mx-auto sm:grid-cols-none md:grid-cols-2 lg:grid-cols-5">
        <div class="mx-1 lg:col-span-2">
            <div class="mt-20 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="px-4 py-8 bg-white shadow rounded-lg sm:px-10">
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
                <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
                    Menu
                </h2>
            </div>
        
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="px-4 py-8 bg-white shadow rounded-lg sm:px-10">
                    @if ( count($menu) == 0)
                        <div class="text-center">
                            Pas de pizzas disponible pour l'instant
                        </div>
                    @else
                        @foreach($menu as $pizza)
                            <div class="flex flex-col">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Image
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Description
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Price sm
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Price md
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Price lg
                                            </th>
                                            @if ($user->is_admin)
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                            @endif
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        Jane Cooper
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        jane.cooper@example.com
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                                                <div class="text-sm text-gray-500">Optimization</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    Active
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                Admin
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            </td>
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