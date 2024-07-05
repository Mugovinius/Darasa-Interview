<?php

namespace App\Http\Controllers;

use App\Models\Query;

class AdminController extends Controller
{
    public function index()
    {
        $queries = Query::all();
        return view('admin.queries', compact('queries'));
    }
}

