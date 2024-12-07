<?php

namespace App\Services;

interface PetServiceInterface
{
    public function getAll(): array;

    public function get(int $id): ?array;

    public function create(array $data): bool;

    public function update(int $id, array $data): bool;

    public function delete(int $id): bool;
}
