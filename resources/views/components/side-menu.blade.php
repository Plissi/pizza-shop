<div class="mx-1 lg:col-span-2">
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    <div class="mt-20 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white rounded-lg shadow sm:px-10">
            <div class="flex justify-center my-2">
                <a class="inline-block px-3 py-1 flex-auto rounded-lg shadow-lg text-center bg-yellow-600 hover:bg-yellow-500 hover:-translate-y-0.5 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-yellow-600 focus:ring-opacity-70 text-yellow-900 text-xl font-serif active:bg-yellow-500 transform transition" href="{{ route('menu.index') }}">Catalog <x-ik-book-opened class="inline-block w-5 py-1" /></a>
            </div>
            <div class="flex justify-center my-2">
                <a class="inline-block px-3 py-1 flex-auto rounded-lg shadow-lg text-center bg-yellow-600 hover:bg-yellow-500 hover:-translate-y-0.5 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-yellow-600 focus:ring-opacity-70 text-yellow-900 text-xl font-serif active:bg-yellow-500 transform transition" href=" {{ route('menu.create') }}">Add <x-monoicon-add class="inline-block w-5 py-1"/></a>
            </div>
            <div class="flex justify-center my-2">
                <a class="inline-block px-3 py-1 flex-auto rounded-lg shadow-lg text-center bg-yellow-600 hover:bg-yellow-500 hover:-translate-y-0.5 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-yellow-600 focus:ring-opacity-70 text-yellow-900 text-xl font-serif active:bg-yellow-500 transform transition" href=" {{ route('menu.create') }}">Cart <x-ik-cart class="inline-block w-5 py-1"/></a>
            </div>
        </div>
    </div>
</div>