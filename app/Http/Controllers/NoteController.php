<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NoteController extends Controller
{
    public function showHomePage(){
        $notes = Note::all();
        return view('home')->with('notes', $notes);
    }

    function addNote(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        Note::create($validatedData);

        return redirect('/home');
    }

    public function editNote($id){
        $note = Note::find($id);
        return view('edit_note')->with('note', $note);
    }

    public function updateNote($id, Request $request){
        $note = Note::find($id);
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();

        return redirect('/home');
    }

    public function deleteNote($id){
        $note = Note::find($id);
        $note->delete();
        return redirect('/home');
    }
}
