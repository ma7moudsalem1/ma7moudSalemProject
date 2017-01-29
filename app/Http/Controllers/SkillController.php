<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\Http\Requests\SkillRequest;
use Redirect;

class SkillController extends Controller
{
    public function index(Skill $skill){
        $skills = $skill->all();
        return view('admin.skill.index', compact('skills'));
    }
    public function create(){
      return view('admin.skill.add');
    }

    public function store(SkillRequest $request, Skill $skill){
      $skill->create($request->all());
      return Redirect('/adminpanel/skills')->withFlashMessage('Skill Added Successfully.');
    }

    public function edit($skill, Skill $skillData){
      $skillSingle = $skillData->find($skill);
      return view('admin.skill.edit', compact('skillSingle'));
    }

    public function update($skill, SkillRequest $request, Skill $skillData){
      $skillSingle = $skillData->find($skill);
      $skillSingle->fill($request->all())->save();
      return Redirect::back()->withFlashMessage('Skill Updated Successfully.');
    }

    public function destroy($id, Skill $skill){
      $skill->find($id)->delete();
      return Redirect::back()->withFlashMessage('Skill Deleted Successfully.');
    }
}
