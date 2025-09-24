<?php
declare(strict_types=1);

namespace App\Providers;

use App\Http\Middleware\AuthMiddleware;
use Core\Application\Middleware\Handler as MiddlewareHandler;
use Core\Support\DI\Contracts\ContainerInterface;
use Core\Support\DI\Contracts\ServiceProviderInterface;

class MiddlewareServiceProvider implements ServiceProviderInterface
{
    public function register(ContainerInterface $container): void
    {
        // Register the middleware handler as a singleton and set aliases
        $container->singleton(MiddlewareHandler::class, function (ContainerInterface $c, array $params = []) {
            $handler = new MiddlewareHandler($c);

            // Aliases
            $handler->alias('auth', AuthMiddleware::class);

            return $handler;
        });
    }
}

