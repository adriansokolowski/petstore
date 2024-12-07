<?php

namespace App\Helpers;

use App\Exceptions\ApiRequestException;
use Illuminate\Support\Facades\Http;

class HttpRequestHandler implements HttpRequestHandlerInterface
{
    private string $baseUrl;

    public function __construct(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    public function request(string $method, string $endpoint, array $data = []): ?array
    {
        try {
            $response = Http::baseUrl($this->baseUrl)->{$method}($endpoint, $data);

            if ($response->successful()) {
                return $response->json();
            }

            throw new ApiRequestException("API Error: {$response->body()}");
        } catch (\Exception $e) {
            throw new ApiRequestException("Communication Error: ".$e->getMessage());
        }
    }
}
