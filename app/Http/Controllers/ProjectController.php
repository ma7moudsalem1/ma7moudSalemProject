<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;
use Redirect;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    public function index(Project $project){
      $projects = $project->all();
      return view('admin.project.index', compact('projects'));
    }

    public function create(){
      return view('admin.project.add');
    }

    public function store(ProjectRequest $request, Project $project){

      if($request->file('image')){
          $filename = str_replace(' ', '_', $request->title) . '_' . time() . $request->file('image')->getClientOriginalName();
          $up = Image::make($request->file('image'));
          $up->resize(null, 191 , function($ratio){
              $ratio->aspectRatio();
          });
          $up->save(public_path('website/images/portfolio/'. $filename));
      }else{
        $filename  = '';
      }
      $array = [
          'title'     => $request->title,
          'dis'       => $request->dis,
          'link_url'  => $request->link_url,
          'image'     => $filename
      ];

      $project->create($array);
      return Redirect('/adminpanel/projects')->withFlashMessage('Project Added Successfully.');
    }

    public function edit($project, Project $projectData){
      $projectSingle = $projectData->find($project);
      return view('admin.project.edit', compact('projectSingle'));
    }

    public function update($project, ProjectRequest $request, Project $projectData){
      $projectSingle = $projectData->find($project);
      $projectSingle->fill(array_except($request->all(), ['image']))->save();
      if($request->file('image')){
          $filename = str_replace(' ', '_', $request->title) . '_' . time() . $request->file('image')->getClientOriginalName();
          $up = Image::make($request->file('image'));
          $up->resize(null, 191 , function($ratio){
              $ratio->aspectRatio();
          });
          $up->save(public_path('website/images/portfolio/'. $filename));
          $projectSingle->fill(['image' => $filename])->save();
      }
      return Redirect::back()->withFlashMessage('Project Updated Successfully.');
    }

    public function destroy($id, Project $project){
      $project->find($id)->delete();
      return Redirect::back()->withFlashMessage('Project Deleted Successfully.');
    }
}
