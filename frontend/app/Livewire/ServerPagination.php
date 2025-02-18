<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Servers;
use Livewire\WithPagination;

class ServerPagination extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';  // Use Tailwind CSS pagination styling

    public function render()
    {
        $servers = Servers::paginate(10);  // Adjust the number of products per page as needed
        return view('livewire.servers.list-servers', compact('servers'));
    }
}
