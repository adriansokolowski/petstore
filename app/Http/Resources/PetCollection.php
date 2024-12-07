<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PetCollection extends ResourceCollection
{
    public function toArray($request): array
    {
        return $this->collection->map(fn($pet) => [
            'id' => $pet['id'],
            'name' => $pet['name'],
            'status' => $pet['status'],
        ])->toArray();
    }
}
