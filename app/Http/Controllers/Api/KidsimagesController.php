<?php

namespace App\Http\Controllers\Api;
use App\Models\KidsImages;
use Illuminate\Http\Request;
use App\Transformers\KidsImagesTransformer;
use App\Http\Requests\Api\KidsImagesRequest;
class KidsimagesController extends Controller
{
    //
    public function test(KidsImages $KidsImages)
    {
    	 return $this->response->collection(KidsImages::all(), new KidsImagesTransformer());
    }
}
