<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Project;
use App\Skill;
use App\User;
use App\Social;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user, Message $message, Project $project, Skill $skill, Social $social)
    {
        $users = $user->count();
        $messages = $message->count();
        $projects = $project->count();
        $skills = $skill->count();

        $lastestAdmin = $user->take('2')->orderBy('id', 'DESC')->get();
        $lastestSkills = $skill->take('5')->orderBy('id', 'DESC')->get();
        $lastestMessage = $message->take('5')->orderBy('id', 'DESC')->get();

        $social = $social->all();

        return view('admin.index', compact('users', 'messages', 'projects', 'skills', 'lastestAdmin', 'lastestSkills', 'social', 'lastestMessage'));
    }
}
