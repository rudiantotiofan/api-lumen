<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
	public function respondWithToken($token)
	{
		return response()->json([
			'token' => $token,
			'type' => 'bearer',
			'expires_in' => Auth::factory()->getTTL() * 60
		], 200);
	}
}
