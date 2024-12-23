<?php

namespace App\Http\Controllers\Admin\Leagues;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LeagueController extends Controller
{

    /**
     * @return View
     */
    public function index(): View
    {
        return view('admin.leagues.index');
    }

}
