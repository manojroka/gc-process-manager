<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProcessDataUpdated implements ShouldBroadcastNow
{
    use InteractsWithSockets, SerializesModels;

    public $processData;

    public function __construct($processData)
    {
        $this->processData = $processData;
    }

    public function broadcastOn()
    {
        return new Channel('process-data'); // Public channel
    }

    public function broadcastAs()
    {
        return 'ProcessDataUpdated'; // Event name
    }
}
