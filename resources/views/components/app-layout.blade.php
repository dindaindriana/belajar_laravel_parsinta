<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{-- untuk pakai tailwindcss --}}
<script src="https://cdn.tailwindcss.com"></script>
{{-- Alpine.js untuk mobile menu --}}
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<title>
    {{-- {{ $title ? $title . ' / Laravel 11' : 'Laravel 11'}} --}}
    @isset($title)
        {{ $title }} / Laravel 11
    @else
        Laravel 11
    @endisset
</title>
</head>

<body>

    <x-navbar/>
    
    <div class="min-h-full">

        @isset($heading)
            <header class="relative bg-white shadow-sm">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
                </div>
            </header>
        @endisset

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}

            </div>
        </main>
    </div>



</body>

</html>
