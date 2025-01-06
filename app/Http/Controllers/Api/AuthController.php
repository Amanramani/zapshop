<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Passport\Passport;

class AuthController extends Controller
{
    /**
     * Register a new user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Return token after registration
        return response()->json([
            'message' => 'User successfully registered.',
            'token' => $user->createToken('YourAppName')->accessToken
        ], 201);
    }

    /**
     * Log in an existing user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        // Check credentials
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            return response()->json([
                'message' => 'Successfully logged in.',
                'token' => $user->createToken('YourAppName')->accessToken
            ], 200);
        }

        // If credentials are incorrect, return an error
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    /**
     * Log out the user and revoke the token.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        // Revoke the token for the user
        $request->user()->token()->revoke();

        return response()->json([
            'message' => 'Successfully logged out.'
        ], 200);
    }

    /**
     * Get the authenticated user's information.
     *
     * @return \Illuminate\Http\Response
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}
