<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function uploadImage($image, $dir = 'images')
    {

        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $direction = public_path('images/'.$dir . '/');
        $image->move($direction, $imageName);
        return $dir . '/' . $imageName;
    }

}

