<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    /**
     * @return View
     */
    public function index(): View
    {
        return view('admin.settings.index');
    }

}
