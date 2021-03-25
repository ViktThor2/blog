<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Customer;
use App\Models\Tag;

class NoteController extends Controller
{
    public function index()
    {
      $notes = Note::paginate('8');
      return view('note.index')
        ->with('notes', $notes);
    }

    public function create()
    {
      $tags = Tag::all();
      return view('note.create')
        ->with('tags', $tags);
    }

    public function store(Request $request)
    {
      $this->validate($request,[
        'name' => 'required|max:30',
        'desc' => 'required'
      ]);

      $note = new Note;
      $note->name = $request->input('name');
      $note->desc = $request->input('desc');
      $note->customer_id = \Auth::guard('customer')->user()->id;
      $note->save();

      $note->tags()->attach($request->input('tags'));
      return redirect()->route('index');
    }
}
