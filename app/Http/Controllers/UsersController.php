<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequestAdmin;
use Redirect;
class UsersController extends Controller
{
    public function index(User $user){
      $users = $user->all();
      return view('admin.user.index', compact('users'));
    }

    public function create(){
      return view('admin.user.add');
    }

    public function store(AddUserRequestAdmin $request, User $user){
         $user::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
        ]);
        return redirect('/adminpanel/users')->withFlashMessage('User added successfully.');
    }

    public function edit($user, User $users){
        $user = $users->find($user);
        return view('admin.user.edit', compact('user'));
    }

    public function update($user, User $users, Request $request){
        $userUpdate = $users->find($user);
        $userUpdate->fill($request->all())->save();
        return Redirect::back()->withFlashMessage('User Updated successfully.');
    }

    public function updatePassowrd(Request $request, User $user){
        $passwordUpdate = $user->find($request->user_id);
        $passwordUpdate->fill(['password' => $request->password])->save();
        return Redirect::back()->withFlashMessage('Password Updated successfully.');
    }

   public function destroy($id, User $user){
        if($id != 1){
          $user->find($id)->delete();
          return redirect('/adminpanel/users')->withFlashMessage('User Deleted successfully.');
        }else{
          return redirect('/adminpanel/users')->withFlashMessage('You Can not delete member 1');
        }

    }
}
