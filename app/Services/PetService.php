<?php

namespace App\Services;

use App\Helpers\HttpRequestHandlerInterface;

class PetService implements PetServiceInterface
{
    private HttpRequestHandlerInterface $httpHandler;
    private string $findByStatusEndpoint;
    private string $baseEndpoint;

    public function __construct(HttpRequestHandlerInterface $httpHandler)
    {
        $this->httpHandler = $httpHandler;
        $this->findByStatusEndpoint = config('petstore.endpoints.pet.find_by_status');
        $this->baseEndpoint = config('petstore.endpoints.pet.base');
    }

    public function getAll(): array
    {
        return $this->httpHandler->request('GET', $this->findByStatusEndpoint, ['status' => 'available']);
    }

    public function get(int $id): ?array
    {
        return $this->httpHandler->request('GET', "{$this->baseEndpoint}/{$id}");
    }

    public function create(array $data): bool
    {
        return $this->httpHandler->request('POST', $this->baseEndpoint, $data) !== null;
    }

    public function update(int $id, array $data): bool
    {
        return $this->httpHandler->request('PUT', $this->baseEndpoint, array_merge(['id' => $id], $data)) !== null;
    }

    public function delete(int $id): bool
    {
        return $this->httpHandler->request('DELETE', "{$this->baseEndpoint}/{$id}") !== null;
    }
}
