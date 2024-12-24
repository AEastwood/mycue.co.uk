<?php

namespace App\Http\Controllers\Dashboard\Leagues;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LeagueController extends Controller
{

    /**
     * @return View
     */
    public function create(): View
    {
        return view('dashboard.leagues.create');
    }

    /**
     * @return View
     */
    public function index(): View
    {
        return view('dashboard.leagues.index');
    }

}
