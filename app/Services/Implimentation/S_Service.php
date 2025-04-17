<?php
namespace App\Services\Implimentation;

use App\Services\IService;
use App\Repository\Interfaces\UserInterface;




class S_Service implements IService
{

    public function  __construct(protected UserInterface $user_repositery, )
    {
        $this->user_repositery = $user_repositery;
    }

    public function create($data){






    }
    public function update($data){






    }
    public function delete($id){






    }
    public function show(){






    }






   
}
