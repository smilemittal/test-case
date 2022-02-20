<?php

namespace App\Http\Controllers\Dashboard;

use App\Domain\Core\Requests\RegisterUserRequest;
use App\Domain\Core\Services\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function form()
    {
        return view('dashboard.register');
    }

    public function register(RegisterUserRequest $request)
    {
        $data = $request->validated();

        Auth::login(
            $this->userService->createUser($data)
        );

        return redirect()->route('dashboard');
    }
}
