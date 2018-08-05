<?php

namespace App\Transformers;

use App\Models\Order;
use League\Fractal\TransformerAbstract;

class OrderTransformer extends TransformerAbstract
{

    public function transform(Order $Order)
    {
        return [
            'id' => $Order->id,
            'parentalnickname' => $Order->parentalnickname,
            'parentalphone' => $Order->parentalphone,
            'babybirthday' => (date) $Order->babybirthday,
            'babynickname' => $Order->babynickname,
            'babyname' => $Order->babyname,
            'isshow' => (int) $Order->isshow,
            'package' => (int) $Order->view_count,
            'category' => (int) $Order->category,
            'price' => (int)$Order->price,
            'userid' => (int)$Order->userid,
            'created_at' => $Order->created_at->toDateTimeString(),
            'updated_at' => $Order->updated_at->toDateTimeString(),
        ];
    }


}
