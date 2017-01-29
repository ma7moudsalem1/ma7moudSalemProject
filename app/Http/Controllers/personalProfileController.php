<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\PersonalProfile;
use Redirect;
class personalProfileController extends Controller
{
  public function index(PersonalProfile $profile){
    $personalProfile = $profile->all();
    return view('admin.presonalperofil.index', compact('personalProfile'));
  }

  public function store(Request $request, PersonalProfile $profile){
    foreach (array_except($request->toArray(), ['_token', 'submit']) as $key => $req) {
        $perofileUpdate = $profile->where('dataname', $key)->get()[0];
        $perofileUpdate->fill(['value' => $req])->save();
    }
    return Redirect::back()->withFlashMessage('Personal Perofile Updated successfully.');
  }
}
