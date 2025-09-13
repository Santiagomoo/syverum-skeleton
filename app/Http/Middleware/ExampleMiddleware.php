<?php

namespace App\Http\Middleware;

use Core\Http\Middleware\MiddlewareInterface;

class ExampleMiddleware implements MiddlewareInterface
{
    public function handle(callable $next)
    {
        // Aquí puedes agregar lógica de prueba
        // Por ejemplo, bloquear si una condición no se cumple
        // if (!isset($_GET['token'])) {
        //     die("Acceso denegado");
        // }

        // Continuar con el flujo normal
        return $next();
    }
}

?>
