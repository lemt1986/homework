<?php

namespace App\Http\Controllers;

use App\Events\MessageSentEvent;
use App\Events\NewChatEvent;
use App\Models\Chat;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function fetch(Request $request)
    {
        $chat = Chat::findorfail($request->chat_id);
        $user = Auth::user();
        return array(
            'title'=> $chat->users()->whereNotIn('users.id', [$user->id])->pluck('name')->implode(', '),
            'mensajes'=> $chat->messages()->with('user')->get()
        );

    }

    public function chats(){
        return Auth::user()->chats()->get();
    }

    public function newChat(Request $request){
        $user = Auth::user();
        $chat = new Chat();
        $chat->save();
        $chat->users()->attach([$request->user,$user->id]);
        broadcast(new NewChatEvent($request->user, $chat->id))->toOthers();
        return $chat;
    }

    public function sentMessage(Request $request)
    {
        $user = Auth::user();

        $message = Message::create([
            'message' => $request->message,
            'user_id' => Auth::user()->id,
            'chat_id' => $request->chat_id,
        ]);
        broadcast(new MessageSentEvent($user, $message, $request->chat_id))->toOthers();
    }
}
