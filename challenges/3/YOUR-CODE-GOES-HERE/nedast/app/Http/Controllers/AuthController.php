<?php
namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;

class AuthController extends Controller {
	public function register(RegisterRequest $request) {
        //create new user from User Model
        $user = User::create($request->all());
        //login created user
        $user = auth()->loginUsingId($user->id);
        //create token for this user
        $token = $user->createToken('token_for_user');
        //redirect this user
        return redirect(route('user'))->with([$user,$token]);
	}

	public function user() {

	}
}
