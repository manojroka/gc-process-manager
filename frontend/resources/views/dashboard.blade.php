<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Dashboard</h1>

                @livewireStyles
                @livewireScripts

                @livewire('process-monitor')
            </div>
        </div>
    </div>
</x-app-layout>
