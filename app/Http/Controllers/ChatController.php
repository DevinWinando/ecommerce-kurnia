<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Message;
use App\Models\Room;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function getRooms()
    {
        if (!auth()->user()->isAn('admin')) abort(403);
        return Room::with('customer', 'latestMessage')
            ->latest()
            ->get();
    }

    public function getMyRoom()
    {
        $user = auth()->user();

        return Room::firstOrCreate(['customer_id' => $user->id]);
    }

    public function getMessages($roomId)
    {
        $room = Room::findOrFail($roomId);
        if ($room->customer_id !== auth()->id() && !auth()->user()->isAn('admin')) abort(403);
        return $room->messages()
            ->with('user')
            ->orderBy('created_at', 'asc')
            ->get();
    }

    public function sendMessage(Request $request)
    {
        $user = auth()->user();

        if (!$user->isAn('admin')) {
            $room = Room::firstOrCreate(['customer_id' => $user->id]);
        } else {
            $room = Room::findOrFail($request->room_id);
        }

        $message = Message::create([
            'room_id' => $room->id,
            'user_id' => $user->id,
            'message' => $request->message
        ])->load('user');

        broadcast(new MessageSent($message));

        return $message;
    }
}
