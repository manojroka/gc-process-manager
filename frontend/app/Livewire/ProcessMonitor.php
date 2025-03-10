<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class ProcessMonitor extends Component
{
    public $processData = "Fetching process data..."; 

    // fetch process data
    public function updateProcessData()
    {
        $this->processData = shell_exec('ps -ef'); 

        // Debugging: Log output
        Log::info('Process Data:', ['data' => $this->processData]);
    }

    public function mount()
    {
        $this->updateProcessData();
    }

    public function render()
    {
        return view('livewire.process-monitor', [
            'processData' => $this->processData, 
        ]);
    }
}
