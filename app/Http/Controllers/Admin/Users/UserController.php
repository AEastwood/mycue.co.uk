<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * @return View
     */
    public function index(): View
    {
        return view('admin.users.index');
    }

    /**
     * @param User $user
     * @return View
     */
    public function show(User $user): View
    {
        return view('admin.users.show', [
            'user' => $user
        ]);
    }

}
