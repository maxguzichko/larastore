<?php

namespace Maxguzichko\Larastore\Http\Controllers;


class MainController extends Controller
{
    public function index()
    {
        return view('larastore::main/index');
    }
}
