<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="w-full border-collapse border border-gray-300">
                        <thead>
                            <tr>
                                <th class="border border-gray-300 p-2 text-center" colspan="12" style="background-color: white;">
                                    Process Live Feed
                                </th>
                            </tr>
                            <tr>
                                <th class="border border-gray-300 p-2 text-left" colspan="12" style="background-color: white;">
                                    Top:
                                </th>
                            </tr>
                            <tr>
                                <th class="border border-gray-300 p-2 text-left" colspan="12" style="background-color: white;">
                                    Tasks:
                                </th>
                            </tr>
                            <tr>
                                <th class="border border-gray-300 p-2 text-left" colspan="12" style="background-color: white;">
                                    %CPU(s):
                                </th>
                            </tr>
                            <tr>
                                <th class="border border-gray-300 p-2 text-left" colspan="12" style="background-color: white;">
                                    MIB Mem:
                                </th>
                            </tr>
                            <tr>
                                <th class="border border-gray-300 p-2 text-left" colspan="12" style="background-color: white;">
                                    MiB Swap:
                                </th>
                            </tr>

                            <tr>
                                <th class="border border-gray-300 p-2">PID</th>
                                <th class="border border-gray-300 p-2">USER</th>
                                <th class="border border-gray-300 p-2">PR</th>
                                <th class="border border-gray-300 p-2">NI</th>
                                <th class="border border-gray-300 p-2">VIRT</th>
                                <th class="border border-gray-300 p-2">RES</th>
                                <th class="border border-gray-300 p-2">SHR</th>
                                <th class="border border-gray-300 p-2">S</th>
                                <th class="border border-gray-300 p-2">%CPU</th>
                                <th class="border border-gray-300 p-2">%MEM</th>
                                <th class="border border-gray-300 p-2">TIME+</th>
                                <th class="border border-gray-300 p-2">COMMAND</th>
                            </tr>
                        </thead>

                        <tbody>
                            @for ($j = 1; $j <= 20; $j++)
                                <tr>
                                    @for ($i = 1; $i <= 12; $i++)
                                        <td class="border border-gray-300 p-2"></td>
                                    @endfor
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
