<div>
    <!-- Button to refresh data manually -->
    <button wire:click="updateProcessData" class="bg-blue-500 text-white p-2 rounded mb-4">Refresh Data</button>

    <!-- Table structure to display process data -->
    <table class="min-w-full table-auto">
        <thead>
            <tr class="bg-gray-200">
                @foreach (array_keys($processData[0] ?? []) as $header)
                    <th class="px-4 py-2 text-left">{{ ucwords(str_replace('_', ' ', $header)) }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($processData as $process)
                <tr class="border-t">
                    @foreach ($process as $value)
                        <td class="px-4 py-2">{{ $value }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
