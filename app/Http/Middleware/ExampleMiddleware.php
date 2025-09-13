<?php

namespace App\Http\Middleware;

class ExampleMiddleware
{
    public function handle($request, $next)
    {
        return $next($request);
    }

    public function __invoke($request, $next)
    {
        return $this->handle($request, $next);
    }
}

?>

