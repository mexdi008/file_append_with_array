<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgaTranslate;

class AgaTranslateController extends Controller
{
    public function index()
    {
        return view('aga_translate',[
            'posts' => AgaTranslate::get(),
        ]);
    }
}
