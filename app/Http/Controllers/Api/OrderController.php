<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\Api\OrderRequest;
use App\Transformers\OrderTransformer;


class OrderController extends Controller
{
    //
     public function store(OrderRequest $request,Order $Order)
    {

        $Order->userid = $request->userid;
        $Order->babybirthday = date("Y-m-d",strtotime($request->babybirthday)); 
        $Order->parentalphone = $request->userid;
        $Order->package = $request->parentalphone;
        $Order->isshow = $request->isshow;
        $Order->babyname = '$request->isshow;';
        $Order->isshow = $request->isshow;
 
        $Order->save();

       return $this->response->array($request)->setStatusCode(201);
   	}
}
