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
                    <table class="w-full border-collapse border border-gray-300 bg-black">
                        <thead>
                            <tr>
                                <th class="border border-gray-300 p-2 text-center text-white" colspan="12">
                                    Process Live Feed
                                </th>
                            </tr>
                            <tr>
                                <th class="border border-gray-300 p-2 text-left text-white" colspan="12" style="background-color: black;">
                                    <span class="font-bold">Top:</span> <span class="ml-2">11:44:15 up 51 min, 1 user, load average: 1.00, 0.82, 0.48</span>
                                </th>
                            </tr>
                            <tr>
                                <th class="border border-gray-300 p-2 text-left text-white" colspan="12" style="background-color: black;">
                                    <span class="font-bold">Tasks:</span> <span class="ml-2">424 total, 2 running, 421 sleeping, 0 stopped, 1 zombie</span>
                                </th>
                            </tr>
                            <tr>
                                <th class="border border-gray-300 p-2 text-left text-white" colspan="12" style="background-color: black;">
                                    <span class="font-bold">%CPU(s):</span> <span class="ml-2">1.1 us, 0.6 sy, 0.0 ni, 98.3 id, 0.0 wa, 0.0 hi, 0.0 sl, 0.0 st</span>
                                </th>
                            </tr>
                            <tr>
                                <th class="border border-gray-300 p-2 text-left text-white" colspan="12" style="background-color: black;">
                                    <span class="font-bold">MIB Mem:</span> <span class="ml-2">31862.9 total, 21361.4 free, 4521.1 used, 5980.4 buff/cache</span>
                                </th>
                            </tr>
                            <tr>
                                <th class="border border-gray-300 p-2 text-left text-white" colspan="12" style="background-color: black;">
                                    <span class="font-bold">MiB Swap:</span> <span class="ml-2">2048.0 total, 2048.0 free, 0.0 used, 25912.8 avaul Mem</span>
                                </th>
                            </tr>

                            <tr>
                                <th class="border border-gray-300 p-2 text-white">PID</th>
                                <th class="border border-gray-300 p-2 text-white">USER</th>
                                <th class="border border-gray-300 p-2 text-white">PR</th>
                                <th class="border border-gray-300 p-2 text-white">NI</th>
                                <th class="border border-gray-300 p-2 text-white">VIRT</th>
                                <th class="border border-gray-300 p-2 text-white">RES</th>
                                <th class="border border-gray-300 p-2 text-white">SHR</th>
                                <th class="border border-gray-300 p-2 text-white">S</th>
                                <th class="border border-gray-300 p-2 text-white">%CPU</th>
                                <th class="border border-gray-300 p-2 text-white">%MEM</th>
                                <th class="border border-gray-300 p-2 text-white">TIME+</th>
                                <th class="border border-gray-300 p-2 text-white">COMMAND</th>
                            </tr>
                        </thead>

                        <tbody>
                            @for ($j = 1; $j <= 20; $j++)
                                <tr>
                                    @for ($i = 1; $i <= 12; $i++)
                                        <td class="border border-gray-300 p-2 text-white"></td>
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
