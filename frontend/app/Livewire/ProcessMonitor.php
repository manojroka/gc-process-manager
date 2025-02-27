<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class ProcessMonitor extends Component
{
    public $processData = [];

    public function updateProcessData()
{
    // Fetch the output of the command
    $rawData = shell_exec('ps aux'); 

    // Log raw data to check the full output
    Log::debug('Raw process data:', ['data' => $rawData]);

    // Process the data into an array
    $lines = explode("\n", $rawData); 

    // Use the first line as headers, split by multiple spaces
    $headers = preg_split('/\s+/', trim(array_shift($lines)));
    
    // Prepare the data rows
    $this->processData = [];

    foreach ($lines as $line) {
        // Split by multiple spaces and trim extra spaces
        $row = preg_split('/\s+/', trim($line));  

        // Check if the number of columns in row matches headers count
        if (count($row) === count($headers)) {  
            $this->processData[] = array_combine($headers, $row);  // Combine headers with values
        } else {
            // Handle the case where rows don't match headers, if necessary (e.g., skip this row)
            Log::warning('Skipping row due to mismatch: ' . implode(' ', $row));
        }
    }

    Log::info('Process Data:', ['data' => $this->processData]);
}



    public function mount()
    {
        $this->updateProcessData();
    }

    public function render()
    {
        return view('livewire.process-monitor');
    }
}
