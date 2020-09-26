<x-slot name="header">
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="{{ route('home') }}"
                   alt="{{ __('Home') }}">
                    <img class="h-8 w-8 lg:h-12 lg:w-12 fill-current inline mb-1 lg:mb-2" src="{{ asset('img/logo.png') }}"
                         alt="{{ __('Food for Kids') }} logo">
                    <span id="brand-name">{{ __('Food for Kids') }}</span>
                </a>
            </div>

            <div class="block lg:hidden pr-4">
                <button id="nav-toggle" class="flex items-center p-1 text-orange-800 hover:text-gray-900">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>{{ __('Menu') }}</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
            </div>

            <div
                class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20"
                id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">Active</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">link</a>
                    </li>
                    @auth
                        <li class="mr-3">
                            <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                               href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                        </li>
                    @else
                        <li class="mr-3">
                            <a href="{{ route('login') }}"
                               class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4">{{ __('Login') }}</a>
                        </li>
                        {{--<li class="mr-3">
                            <a href="{{ route('register') }}"
                               class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4">{{ __('Register') }}</a>
                        </li>--}}
                    @endauth
                </ul>
                <button id="nav-action"
                        class="mx-auto lg:mx-0 flex items-center hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75">
                    {{ __('Donate') }}
                    @include('components.svg.heart')
                </button>
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0"/>
    </nav>
</x-slot>
