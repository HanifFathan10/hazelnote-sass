<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        $user = auth()->user();

        if (!$user) {
            return redirect()->route('account.login');
        }

        $notes = Note::latest()
            ->with('priority')
            ->where('user_id', $user->id)
            ->paginate(5);

        return view('page.homepage', [
            'name' => config('app.name'),
            'user' => $user,
            'notes' => $notes,
        ]);
    }
}
