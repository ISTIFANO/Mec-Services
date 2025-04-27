<?php 

namespace App\Repository;

use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use App\Repository\Interfaces\MessageInterface;



class MessageRepository implements MessageInterface{






    public function chat($receiverId){


        $messages = Message::where(function ($query) use ($receiverId){
            $query->where('sender_id', Auth::id())->where('receiver_id', $receiverId);
        })->orWhere(function ($query) use ($receiverId) {
            $query->where('sender_id', $receiverId)->where('receiver_id', Auth::id());
        })->get();

        return $messages;

    }
    public function sendMessage($data){


      return   Message::create([
            'sender_id'     => Auth::id(),
            'receiver_id'   => $data['receiverId'],
            'message_text'       => $data['message']
        ]);
    }
    public function Find($user_id){
        return  User::find($user_id);
    }
    
 
    
}




















?>