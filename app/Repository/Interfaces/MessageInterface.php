<?php 
namespace App\Repository\Interfaces;



interface MessageInterface{

    public function chat($id);
    public function sendMessage($message);
    public function Find($id);
    public function getclient($mechanicienId);
    public function getmechanicien($clientID);


    
}
















?>