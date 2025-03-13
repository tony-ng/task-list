<!DOCTYPE html>
<head>
    <title>Task List App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    
    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
        .btn {
            @apply rounded-md px-2 py-1 border border-slate-700 text-center text-base font-medium text-gray-700 hover:bg-slate-100
        }

        .link {
            @apply text-base font-medium text-gray-500 underline
        }

        label {
            @apply block mb-2 text-gray-700 uppercase
        }

        input, textarea {
            @apply mb-2 border appearance-none w-full px-3 py-2 text-gray-700 
        }

        .error {
            @apply text-red-700 text-sm mb-4
        }
    </style>
    {{-- - blade-formatter-enable --}}

    @yield('style')
</head>
<body x-data="{ flash: true }" class="container mx-auto mt-4 max-w-lg">
    @if (session()->has('success'))
        <div x-show="flash" class="relative mb-10 rounded border border-green-400 bg-green-100 text-green-700 text-lg py-2 px-4" role="alert">
            <strong>Success!</strong>
            <p>{{ session('success') }}</p>
            <div class="absolute right-0 top-0 px-4 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 cursor-pointer" @click="flash = false">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg> 
            </div>         
        </div>
    @endif

    @yield('title')

    @yield('content')
</body>
</html>