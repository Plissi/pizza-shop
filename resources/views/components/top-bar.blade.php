<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    <div class="absolute top-0 mt-4">
        <a 
            href="{{ route('home') }}" 
            class="font-serif text-xl font-semibold tracking-wider text-center text-yellow-600">
            {{ config('app.name') }}
        </a>
    </div>
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
</div>