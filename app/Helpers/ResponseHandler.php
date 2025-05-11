<?php 

namespace App\Helpers;

use App\Enums\HttpStatusCode;

class ResponseHandler{



public static function success($message,$statusCode =HttpStatusCode::HTTP_OK,$data){
    
    return response()->json(["status"=>'success',"message"=>$message,"data"=>$data],$statusCode);
}




public static function error($message,$statusCode = HttpStatusCode::HTTP_SERVER_ERROR,$errors){
    
    return response()->json(["status"=>'error',"message"=>$message,"error"=>$errors],$statusCode);

}






}


?>