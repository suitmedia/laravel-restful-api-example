<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthGetTokenRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Get Token.
     * Return a token for requesting protected resources.
     *
     * @param \App\Http\Requests\PostCategorySaveRequest $request
     *
     * @return JsonResponse
     */

    public function getToken(AuthGetTokenRequest $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return new JsonResponse([
                'message' => 'Wrong email or password',
            ], 422);
        }

        $admin = Auth::user();

        $token = $admin->createToken('client');
        
        return new JsonResponse([
            'message' => 'Your Login Is Successfull',
            'type'    => 'Bearer',
            'token'   => $token->plainTextToken,
        ]);
    }
}