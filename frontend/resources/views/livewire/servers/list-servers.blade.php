<?php
 
use Livewire\Volt\Component;
use Livewire\WithPagination;
use App\Models\Servers;

?>

<div>
<table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Hostname</th>
                <th class="py-3 px-6 text-left">Username</th>
                <th class="py-3 px-6 text-left">SSH Port</th>
                <th class="py-3 px-6 text-left">Access Method</th>
                <th class="py-3 px-6 text-left">Password</th>
                <th class="py-3 px-6 text-left">SSH Public Key</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
            @foreach ($servers as $server)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6">{{ $server->host_name }}</td>
                    <td class="py-3 px-6">{{ $server->username }}</td>
                    <td class="py-3 px-6">{{ $server->server_port }}</td>
                    <td class="py-3 px-6">{{ $server->access_method }}</td>
                    <td class="py-3 px-6">{{ $server->password }}</td>
                    <td class="py-3 px-6">{{ $server->ssh_public_key }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="mt-4">
        {{ $servers->links() }}
    </div>
</div>