{{-- @use('Illuminate\Support\Facades\Auth') // kalau mangginnya kaya gini Auth::user() harus import diatas seperti ini  --}}

<nav class="bg-zinc-900" x-data="{ mobileMenuOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                        alt="Your Company" class="size-8" />
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        {{-- @dump(request()->is('about')) jika pakai cara seperti ini kita harus terus terusan definisikan utuk setiap nav menu --}}
                        <!-- Current: "bg-zinc-900 text-white", Default: "text-zinc-300 hover:bg-white/5 hover:text-white" -->
                        <x-navbar.link href="/">Home</x-navbar.link>
                        <x-navbar.link href="{{ route('about') }}">About</x-navbar.link>
                        <x-navbar.link href="{{ route('contact') }}">Contact</x-navbar.link>
                        <x-navbar.link href="{{ route('gallery') }}">Gallery</x-navbar.link>

                        @auth
                            <x-navbar.link href="{{ route('users.index') }}">Users</x-navbar.link>
                        @endauth

                        @auth {{-- @auth adalah Blade directive untuk ngecek apakah user sedang login (authenticated). --}}
                            <x-navbar.link href="#">
                                {{ auth()->user()->name }} {{-- Kalau user sudah login, maka isi di dalam blok @auth ... @endauth akan ditampilkan. --}}
                            </x-navbar.link>

                            <form method="post" action="{{ route('logout') }}">
                                @csrf
                                <x-button type="submit">Logout</x-button>
                            </form>
                        @else
                            <x-navbar.link href="{{ route('login') }}">Login</x-navbar.link> {{-- Kalau user belum login, tampilkan link menuju halaman login --}}
                        @endauth
                    </div>
                </div>
            </div>

            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="mobileMenuOpen = !mobileMenuOpen"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-zinc-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                        aria-hidden="true" class="size-6" :class="{ 'hidden': mobileMenuOpen }">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                        aria-hidden="true" class="size-6" :class="{ 'hidden': !mobileMenuOpen }">
                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="block md:hidden" x-show="mobileMenuOpen" x-transition>
        <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
            <!-- Current: "bg-zinc-900 text-white", Default: "text-zinc-300 hover:bg-white/5 hover:text-white" -->
            <x-navbar.dropdown-item href="/">Home</x-navbar.dropdown-item>
            <x-navbar.dropdown-item href="{{ route('about') }}">About</x-navbar.dropdown-item>
            <x-navbar.dropdown-item href="{{ route('contact') }}">Contact</x-navbar.dropdown-item>
            <x-navbar.dropdown-item href="{{ route('gallery') }}">Gallery</x-navbar.dropdown-item>
            <x-navbar.dropdown-item href="{{ route('users.index') }}">User</x-navbar.dropdown-item>
            <x-navbar.dropdown-item href="{{ route('login') }}">Login</x-navbar.dropdown-item>
        </div>
    </div>
</nav>
