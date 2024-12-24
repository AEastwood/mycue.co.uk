<?php

namespace App\Http\Controllers\Dashboard\Leagues;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Leagues\League;
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

    /**
     * @param League $league
     * @return View
     */
    public function show(League $league): View
    {
        return view('dashboard.leagues.show', [
            'league' => $league
        ]);
    }

}
