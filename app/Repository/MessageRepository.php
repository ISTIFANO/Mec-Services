<?php 

namespace App\Repository;

use App\Models\Mechanic;
use App\Models\User;
use App\Models\Message;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
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
    public function find($user_id){
        return Mechanic::with('user')->find($user_id);
    }
    
        public function getclient($mechanicienId){

            $clients = DB::table('services')
            ->join('users as clients', 'services.client_id', '=', 'clients.id') 
            ->where('services.mechanicien_id', $mechanicienId) 
            ->select('clients.id as client_id', 'clients.name as client_name', 'clients.email as client_email') 
            ->distinct() 
            ->get();


            return $clients;

        }
    public function getmechanicien($clientId){

        $mechaniciens = DB::table('services')
        ->join('users as mechaniciens', 'services.mechanicien_id', '=', 'mechaniciens.id')
        ->where('services.client_id', $clientId) 
        ->select('mechaniciens.id as mechanicien_id', 'mechaniciens.name as mechanicien_name', 'mechaniciens.email as mechanicien_email') 
        ->distinct() 
        ->get();

        return $mechaniciens;
        
    }
    // public function  showUsers()
    // {
    //     $service= Service::with("mechanicien.user")->where('client_id', Auth::user()->id)})->orWhere(function ($query) use ($receiverId) {
    //         Service::with("mechanicien.user")->where('mechanicien_id', Auth::user()->id)

    //     };
    //     return $service;
    // }
    
  


}

?>

















