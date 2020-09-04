<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/
Broadcast::channel('Chat.{chat_id}', function ($user, $chat_id) {
    if($user->chats()->where('chats.id',$chat_id)->first()){
        return true;
    }
    return false;
});

Broadcast::channel('chat', function ($user) {
    return Auth::user();
});

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
