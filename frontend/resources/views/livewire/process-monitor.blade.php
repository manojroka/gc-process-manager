<div wire:poll.20s="updateProcessData">
    <h2 class="text-xl font-semibold"></h2>

    @if(isset($processData) && !empty($processData))
        <pre class="bg-gray-100 p-4 rounded border">{{ print_r($processData, true) }}</pre>
    @else
        <p class="text-gray-500">No process data available.</p>
    @endif
</div>
