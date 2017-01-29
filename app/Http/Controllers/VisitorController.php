<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Skill;
use App\Social;
class VisitorController extends Controller
{
    public function index(Social $social, Skill $skills, Project $projects)
    {
      $skills = $skills->all();
      $projects = $projects->all();
      $social = $social->all();
      return view('welcome', compact('social', 'projects', 'skills'));
    }
    
}
