<?php

namespace App\Http\Middleware;

use Core\Support\Http\Request;
use Core\Support\Http\Response;
use Core\Support\Middleware\Contracts\MiddlewareInterface;

final class AuthMiddleware implements MiddlewareInterface
{
    public function __construct(private Request $request) {}
    public function process(callable $next): mixed
    {
        if (!$this->estaAutenticado()) {
            return Response::text('Unauthorized', 401);
        }
        return $next();
    }
    private function estaAutenticado(): bool
    { /* tu lógica */
        return false;
    }
}
