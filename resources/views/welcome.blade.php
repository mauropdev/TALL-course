<x-guest-layout>
    <div class="flex flex-col bg-indigo-900 h-screen">
        <nav class="pt-5 flex justify-between container mx-auto text-indigo-200">
            <a href="/" class="text-4xl font-bold">
                <x-application-logo class="w-16 h-16 fill-current">                
                </x-application-logo>
            </a>
            <div class="flex justify-end">
                @auth
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                @endauth
            </div>
        </nav>
    </div>
    <div class="flex flex-col bg-pink-500 h-screen">

    </div>
</x-guest-layout>
