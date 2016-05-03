<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Note;

Use Auth;

class NotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function addNote(Request $request)       
    {
        $note = new Note();
        $note->user_id = Auth::user()->id;
        $note->title = $request->title;
        $note->body = $request->body;
        $note->save();
        return back();
    }

    public function deleteNote($noteId)
    {   
        $user = Auth::user();
        $note = Note::find($noteId);
        if($note->user_id != $user->id){
            return back();
        }
        $note->delete();
        return back();
    }
}
