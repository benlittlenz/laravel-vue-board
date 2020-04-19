<?php

namespace App\Http\Controllers;

use App\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function destroy(Notes $note)
    {
        $note->delete();
    }
}
