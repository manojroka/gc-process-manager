<?php
 
use Livewire\Volt\Component;
use Livewire\WithPagination;
 
new class extends Component {

    public $sortBy = 'date';
    public $sortDirection = 'desc';
    public $servers;

    public function sort($column) {
        if ($this->sortBy === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $column;
            $this->sortDirection = 'asc';
        }
    }

    #[\Livewire\Attributes\Computed]
    public function orders()
    {
        return \App\Models\Order::query()
            ->tap(fn ($query) => $this->sortBy ? $query->orderBy($this->sortBy, $this->sortDirection) : $query)
            ->paginate(5);
    }

} ?>


<flux:table :paginate="$this->servers">
    <flux:columns>
        <flux:column sortable :sorted="$sortBy === 'host_name'" :direction="$sortDirection" wire:click="sort('host_name')">Host name (FQDN)</flux:column>
        <flux:column sortable :sorted="$sortBy === 'username'" :direction="$sortDirection" wire:click="sort('username')">Username</flux:column>
        <flux:column sortable :sorted="$sortBy === 'server_port'" :direction="$sortDirection" wire:click="sort('server_port')">Server SSH Port</flux:column>
        <flux:column sortable :sorted="$sortBy === 'access_method'" :direction="$sortDirection" wire:click="sort('access_method')">Access Method</flux:column>
        <flux:column>Password</flux:column>
        <flux:column>SSH Public Key</flux:column>
    </flux:columns>
    <flux:rows>
        @foreach ($this->servers as $order)
            <flux:row :key="$order->id">
                <flux:cell class="flex items-center gap-3">
                    <flux:avatar size="xs" src="{{ $order->customer_avatar }}" />

                    {{ $order->customer }}
                </flux:cell>

                <flux:cell class="whitespace-nowrap">{{ $order->date }}</flux:cell>

                <flux:cell>
                    <flux:badge size="sm" :color="$order->status_color" inset="top bottom">{{ $order->status }}</flux:badge>
                </flux:cell>

                <flux:cell variant="strong">{{ $order->amount }}</flux:cell>

                <flux:cell>
                    <flux:button variant="ghost" size="sm" icon="ellipsis-horizontal" inset="top bottom"></flux:button>
                </flux:cell>
            </flux:row>
        @endforeach
    </flux:rows>
</flux:table>
