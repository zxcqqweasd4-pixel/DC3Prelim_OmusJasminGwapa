<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Showroom</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach (['Sedan X1', 'Coupe R2', 'SUV T3'] as $item)
                <div class="bg-white shadow-sm sm:rounded-lg p-6">
                    <div class="h-32 bg-gray-200 rounded mb-4"></div>
                    <h3 class="font-semibold text-lg">{{ $item }}</h3>
                    <p class="text-gray-500 text-sm">Members-only showroom item.</p>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>