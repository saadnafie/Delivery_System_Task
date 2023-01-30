<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait JsonResponse {

  public function message_success()
  {
    return "success";
  }

  public function code_success()
  {
    return 200;
  }

  public function toJson($code,$message,$data){
    $status['code'] = $code;
    $status['message'] = $message;
    $response['status'] = $status;
    if($data != null)
        $response['data'] = $data;
    return response()->json($response,200);
  }
}
