<?php

namespace App\Http\Controllers\Api;
use App\Models\KidsImages;
use Illuminate\Http\Request;
use App\Transformers\KidsImagesTransformer;

class KidsimagesController extends Controller
{
    //
    public function getswiper(Request $request,KidsImages $KidsImages)
    {
        $query = $KidsImages->query();

  
        if ($category = $request->category) {
            $query->where('category', $category);
        }

 
        $KidsImages = $query->paginate(20);

        return $this->response->item($KidsImages, new KidsImagesTransformer());

    }
}
