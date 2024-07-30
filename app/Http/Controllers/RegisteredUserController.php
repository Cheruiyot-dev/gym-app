<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Fortify\Contracts\RegisterResponse;
use Laravel\Fortify\Http\Controllers\RegisteredUserController as FortifyRegisteredUserController;

class RegisteredUserController extends FortifyRegisteredUserController
{
    public function store(Request $request,
                          CreatesNewUsers $creator): RegisterResponse
    {
        $user = $creator->create($request->all());

        if (!$user) {
          
            Log::error('User creation failed in RegisteredUserController');
            // Handle the error appropriately
        }

        $this->guard->login($user);

        return app(RegisterResponse::class);
    }
}