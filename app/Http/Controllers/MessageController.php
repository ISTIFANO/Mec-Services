<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use App\Models\Service;
use App\Events\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repository\MessageRepository;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Repository\Interfaces\MessageInterface;

class MessageController extends Controller
{
    protected MessageInterface $message_repositery;
    public function __construct( MessageInterface $message_repositery)
    {
        $this->message_repositery = $message_repositery;
    }


    public function chat(Request $request)
    {
        $receiverId = $request->mechanicien_id;
        $receiver =$this->message_repositery->Find($receiverId);

        $messages =$this->message_repositery->chat($receiverId) ;

        return view('Admin.Service.chat', compact('receiver', 'messages'));
    }

    public function sendMessage(Request $request)
    {
        dd($request->all());
$data = ["message" => $request->message ,"receiverId" => $request->receiverId  ];



        $message = $this->message_repositery->sendMessage($data);
        
        broadcast(new SendMessage($message))->toOthers();
        
        return response()->json(['status' => 'Message sent!']);
    }

    

}
