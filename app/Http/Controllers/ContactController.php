<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //showForm
    public function showForm()
    {
        return view('contact');
    }
}
