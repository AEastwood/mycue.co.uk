<?php

namespace App\Http\Controllers\Dashboard\Community;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CommunityController extends Controller
{

    /**
     * @return View
     */
    public function index(): View
    {
        return view('dashboard.community.index');
    }

}
