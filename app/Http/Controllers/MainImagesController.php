<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainImages;
use App\Http\Requests\MainImagesRequest;
use Redirect;
use Intervention\Image\Facades\Image;
class MainImagesController extends Controller
{
    public function edit($id, MainImages $images){
      $image = $images->find($id);
      return view('admin.images.index', compact('image'));
    }

    public function update($image, MainImagesRequest $request, MainImages $images){

      if($request->file('image')){
          $filename = time().'_'.rand(10,20000).'_'.$request->file('image')->getClientOriginalName();
          $up = Image::make($request->file('image'));
          $up->resize(null, 350 , function($ratio){
              $ratio->aspectRatio();
          });
          $up->save(public_path('website/images/'. $filename));

          $findImage = $images->find($image);
          $findImage->fill(['image' => $filename])->save();
      }

      return Redirect::back()->withFlashMessage('Image Updated Successfully.');
    }
}
