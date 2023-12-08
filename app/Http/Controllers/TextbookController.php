<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Textbook;

class TextbookController extends Controller
{
    public function index (Textbook $textbook)
    {
        return view('texts.index')->with(['textbooks' => $textbook->get()]);
    }
}
