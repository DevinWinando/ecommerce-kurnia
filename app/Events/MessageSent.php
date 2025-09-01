<?php

namespace App\Events;

use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class MessageSent implements ShouldBroadcast
{
    use Dispatchable, SerializesModels;

    public $message;
    public $connection = 'sync';

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function broadcastAs()
    {
        return 'MessageSent';
    }

    public function broadcastOn()
    {
        return new PrivateChannel('room.' . $this->message->room_id);
    }

    public function broadcastWith()
    {
        return [
            'id' => $this->message->id,
            'message' => $this->message->message,
            'user' => $this->message->user,
            'created_at' => $this->message->created_at,
        ];
    }
}
