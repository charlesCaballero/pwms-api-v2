<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Traits\ApiResponse;
use App\Models\User;

class AuthController extends Controller
{
    use ApiResponse;
    //
    public function login(Request $request)
    {
        $credentials = [
            'hris' => $request->hris,
            'password' => $request->password
        ];
        if (!Auth::attempt($credentials)) {
            return $this->error('Your HRIS number or password did not match.', 401);
        } else {
            if (Auth::user()->status === 0) {
                return $this->error('Your account is not yet activated.', 401);
            } else {
                $user = Auth::user();

                if ($user instanceof \App\Models\User) {
                    // Hinting here for $user will be specific to the User object
                    $token = $user->createToken($request->device_name)->plainTextToken;
                    return $this->success([
                        'token' => $token,
                        'user_id' => $credentials['company_id_number'],
                    ]);
                } else {
                    // Handle Error. Not logged in or guard did not return a User object.
                    return $this->error('No user is found', 401);
                }
            }
        }
    }
}
