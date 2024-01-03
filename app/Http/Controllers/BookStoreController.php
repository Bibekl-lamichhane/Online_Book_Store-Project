<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookStoreController extends Controller
{
    public function index()
    {
        return view('bookStore.index');
    }
}
