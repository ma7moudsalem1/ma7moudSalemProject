<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SocialRequest;
use App\Social;
use App\Fa;
use Redirect;

class SocialController extends Controller
{
  public function index(Social $social){
    $social = $social->all();
    return view('admin.social.index', compact('social'));
  }

  public function create(Fa $faVar){
    $faVar = $faVar->all();
    foreach ($faVar as $key => $value) {
      $fa[] = $value->class;
      array_unshift($fa,"");
      unset($fa[0]);
    }
    return view('admin.social.add', compact('fa'));
  }

  public function store(SocialRequest $request, Social $social){
    $social->create($request->all());
    return Redirect('/adminpanel/social')->withFlashMessage('Link Added Successfully.');
  }

  public function edit($social, Fa $faVar, Social $socialMod){
    $faVar = $faVar->all();
    foreach ($faVar as $key => $value) {
      $fa[] = $value->class;
      array_unshift($fa,"");
      unset($fa[0]);
    }

    $link = $socialMod->find($social);
    return view('admin.social.edit', compact('link', 'fa'));
  }

  public function update($social, SocialRequest $request, Social $socialMod){
    $link = $socialMod->find($social);
    $link->fill($request->all())->save();
    return Redirect::back()->withFlashMessage('Link Updated Successfully.');
  }

  public function destroy($id, Social $Social){
    $Social->find($id)->delete();
    return Redirect::back()->withFlashMessage('Link Deleted Successfully.');
  }
}
