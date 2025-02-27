<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast; 
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProcessDataUpdated implements ShouldBroadcast 
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $processData;

    public function __construct($processData)
    {
        $this->processData = $processData;
    } // Added missing closing brace

    public function broadcastOn()
    {
        return new Channel('process-data'); // Public channel
    }

    public function broadcastAs()
    {
        return 'ProcessDataUpdated'; // Event name
    }
}