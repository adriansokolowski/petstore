<?php

namespace App\Helpers;

interface HttpRequestHandlerInterface
{
    public function request(string $method, string $endpoint, array $data = []): ?array;
}
