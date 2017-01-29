<?php

namespace App\Http\Controllers;
use App\SiteSetting;
use App\MainImages;
use Illuminate\Http\Request;
use Redirect;
class SiteSettingController extends Controller
{
    public function index(SiteSetting $setting, MainImages $images){
      $siteSetting = $setting->all();
      $images      = $images->all();
      return view('admin.sitesetting.index', compact('siteSetting', 'images'));
    }

    public function store(Request $request, SiteSetting $setting){
      foreach (array_except($request->toArray(), ['_token', 'submit']) as $key => $req) {
          $sieSettingsUpdate = $setting->where('namesetting', $key)->get()[0];
          $sieSettingsUpdate->fill(['value' => $req])->save();
      }
      return Redirect::back()->withFlashMessage('Site Settings Updated successfully.');
    }
}
