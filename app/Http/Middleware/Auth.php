<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\DB;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $user = User::where('email', $request->username)->first();
        $clientId = $user->client_id;
        
        $oauth_clients = DB::select("SELECT * FROM oauth_clients WHERE id = ?", [1]);
        $client_secret = $oauth_clients && $oauth_clients[0] ? $oauth_clients[0]->secret : null;

        $input = $request->all();

        $input['user'] = $user ? true : false;
        if ($user) {
            $input['client_id'] = $clientId;
            $input['client_secret'] = $client_secret;
        }
        $request->replace($input);

        return $next($request);
    }
}
