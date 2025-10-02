<?php
use PHPUnit\Framework\TestCase;

class RouteTest extends TestCase
{
    public function test_home_route_returns_ok()
    {
        $response = file_get_contents('http://127.0.0.1:3000/');
        $this->assertStringContainsString('OK', $response);
    }
}
