<?php

namespace App\Http\Controllers\Admin;

use App\Models\Note;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('page.dashboard.note');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoteRequest $request)
    {

        try {
            $note = new Note([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'body' => $request->body,
                'priority_id' => intval($request->priority),
                'user_id' => auth()->user()->id
            ]);

            $note->save();

            return redirect('/')->with('success', 'User has been registered');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while registering user');
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNoteRequest $request, Note $note)
    {

        $note->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'priority_id' => intval($request->priority),
            'body' => $request->body
        ]);

        return redirect('/')->with('success', 'Note has been updated');
    }

    /**
     * Delete the specified resource from storage.
     */
    public function destroy($slug)
    {
        $note = Note::where('slug', $slug)->first();

        if (!$note) {
            abort(404);
        }
        $note->delete();

        return redirect('/')->with('success', 'Note has been deleted');
    }
}
