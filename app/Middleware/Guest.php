<?php

namespace App\Middleware;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use App\Services\Auth as AuthService;

class Guest{

    public function __invoke(ServerRequestInterface $request,ResponseInterface $response, $next)
    {
        //$response->getBody()->write('BEFORE');
        $user = AuthService::getUser();
        if($user->isLogin){
            // @TODO  login action
        }
        $response = $next($request, $response);
        //$response->getBody()->write('AFTER');
        return $response;
    }
}