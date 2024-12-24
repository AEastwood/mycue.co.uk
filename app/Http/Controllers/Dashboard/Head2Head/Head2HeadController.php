<?php

namespace App\Http\Controllers\Dashboard\Head2Head;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Head2HeadController extends Controller
{

    public function index(): View
    {
        return view('dashboard.head2head.index');
    }

}
