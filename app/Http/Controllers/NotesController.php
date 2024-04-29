<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Notes;
use Illuminate\View\View;

class NotesController extends Controller
{
    public function show(string $id)
    {
        $notes = Notes::find($id);
        // dd($notes);
        return view('notes')->with('data', $notes);
    }

}
