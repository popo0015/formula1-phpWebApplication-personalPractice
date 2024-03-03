<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\Team;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of Tasks.
     */
    public function index()
    {
        return view('welcome', [
            'teams' => Team::all(),
            'drivers' => Driver::all()
        ]);
    }
}
