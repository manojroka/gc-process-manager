<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <table class="w-full border border-gray-300 bg-white text-black">
                        <thead>
                            <tr>
                                <th class="border border-gray-300 p-2 text-center text-lg font-semibold" colspan="12">
                                    Process Live Feed
                                </th>
                            </tr>
                            <tr><th class="border border-gray-300 p-2 text-left" colspan="12"> <b>Top: </b> 11:44:15 up 51 min, 1 user, load average: 1.00, 0.82, 0.48 </th></tr>
                            <tr><th class="border border-gray-300 p-2 text-left" colspan="12"> <b>Tasks: </b> 424 total, 2 running, 421 sleeping, 0 stopped, 1 zombie </th></tr>
                            <tr><th class="border border-gray-300 p-2 text-left" colspan="12"> <b>%CPU(s): </b> 1.1 us, 0.6 sy, 0.0 ni, 98.3 id, 0.0 wa, 0.0 hi, 0.0 sl, 0.0 st </th></tr>
                            <tr><th class="border border-gray-300 p-2 text-left" colspan="12"> <b>MIB Mem: </b> 31862.9 total, 21361.4 free, 4521.1 used, 5980.4 buff/cache </th></tr>
                            <tr><th class="border border-gray-300 p-2 text-left" colspan="12"> <b>MiB Swap: </b> 2048.0 total,  2048.0 free, 0.0 used, 25912.8 avail Mem </th></tr>

                            <tr class="bg-gray-200">
                                @foreach(['PID', 'USER', 'PR', 'NI', 'VIRT', 'RES', 'SHR', 'S', '%CPU', '%MEM', 'TIME+', 'COMMAND'] as $header)
                                    <th class="border border-gray-300 p-2">{{ $header }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @for ($j = 1; $j <= 20; $j++)
                                <tr class="{{ $j % 2 === 0 ? 'bg-gray-50' : 'bg-white' }}">
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
