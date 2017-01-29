<?php
/* To get Main Settings Of The Website Directelly */
function getSettings($settingName = 'sitename'){
    return \App\SiteSetting::where('namesetting', $settingName)->get()[0]->value;
}

/* To get Main Images Of The Website Directelly */
function getMainImages($image = 'Personal Profile'){
    return \App\MainImages::where('slag', $image)->get()[0]->image;
}

/* To get Personal Profil Data Directelly */
function getProfile($dataname = 'name'){
    return \App\PersonalProfile::where('dataname', $dataname)->get()[0]->value;
}

/*  To Get Unreading Messages */
function getUreadMessages(){
  return \App\Message::where('view', 0)->orderBy('created_at', 'DESC')->get();
}

/*  To Get Count Of Unreading Messages */
function getCountUreadMessages(){
  return \App\Message::where('view', 0)->count();
}

/* To get Icon */
function getIcon($fa){
    $class = \App\Fa::find($fa);
    return $class->class;
}

/* Set Active */
function set_active($route)
{
  if(!empty($route)){
    if(is_array($route))
    {
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
  }
}


/* To Check If The Image Exists In The Path Or Dosplay No Image Photo */
 function checkImage($imageName){
    if($imageName != ''){
      $appPath = base_path().'/public/website/images/'.$imageName;
      $projectPath = base_path().'/public/website/images/portfolio/'.$imageName;
      if(file_exists($appPath)){
        return Request::root().'/public/website/images/'.$imageName;
      }elseif(file_exists($projectPath)){
        return Request::root().'/public/website/images/portfolio/'.$imageName;
      }else{
        return getSettings('no_image');
      }
    }else{
    return getSettings('no_image');
  }
}

/* To Get Color To Skills Section */
function getColor(){
  $array = [
    'primary',
    'danger',
    'success',
    'info',
    'warning'
  ];
  return $array;
}

function setColor($var){
  if($var == 0){
    $color = 'primary';
  }elseif($var == 1){
    $color = 'danger';
  }elseif($var == 2){
    $color = 'success';
  }elseif($var == 3){
    $color = 'info';
  }else{
    $color = 'warning';
  }
  return $color;
}

/*  To Check Stutes Of Messages */
function checkStutes($value)
{
  if($value == 0){
    return 'unread';
  }else{
    return 'read';
  }
}

/*  To Check Look Of The Stutes Of Messages */
function checkLookStutes($value)
{
  if($value == 0){
    return 'red';
  }else{
    return 'green';
  }
}
