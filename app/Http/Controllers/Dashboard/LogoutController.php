<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function __invoke()
    {
        if (Auth::check()) {
            Auth::logout();
        }

        return redirect()->route("login.form");
    }
}
