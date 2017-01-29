<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Http\Requests\MessageRequest;
use Redirect;
class MessageController extends Controller
{

    public function index(Message $messages){
      $messages = $messages->all();
      return view('admin.message.index', compact('messages'));
    }

    public function store(MessageRequest $request, Message $message){
      $message->create($request->all());
      return Redirect::back()->withFlashMessage('Thanks, I received your message');
    }

    public function show($id, Message $messages){
      $message = $messages->find($id);
      $message->fill(['view' => 1])->save();
      return view('admin.message.show', compact('message'));
    }

    public function destroy($id, Message $messages){
      $messages->find($id)->delete();
      return Redirect('/adminpanel/messages')->withFlashMessage('Message deleted successfully');
    }
}
