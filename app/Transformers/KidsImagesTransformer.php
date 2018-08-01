<?php

namespace App\Transformers;

use App\Models\KidsImages;
use League\Fractal\TransformerAbstract;

class KidsImagesTransformer extends TransformerAbstract
{
    public function transform(KidsImages $KidsImages)
    {
        return [
            'id' => $KidsImages->id,
            'category' => $KidsImages->category,
            'package' => $KidsImages->package,
        ];
    }
}