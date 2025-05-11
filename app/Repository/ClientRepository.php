<?php 

namespace App\Repository;

use App\Models\Client;
use App\Repository\Interfaces\ClientInterface;


class ClientRepository implements ClientInterface{

    protected Client $Client;
    public function __construct()
    {
        $this->Client = new Client();

        
    }

    public function show()
    {
        $Client = $this->Client->all();

        return $Client;
    }

    public function delete($id)
    {

        $this->Client->where('id', '=', $id)->delete();

        return true;
    }
    public function update($data, $id)
    {
        $data =  $this->Client->where('id', '=', $id)->update($data);

        return $data;
    }
    public function  findbyid($id){
        $Client =  $this->Client->where('id', '=', $id)->first();

        return $Client;
    }





    
}




















?>