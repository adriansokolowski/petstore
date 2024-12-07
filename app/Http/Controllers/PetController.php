<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePetRequest;
use App\Http\Requests\UpdatePetRequest;
use App\Http\Resources\PetCollection;
use App\Http\Resources\PetResource;
use App\Services\PetServiceInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PetController extends Controller
{
    private PetServiceInterface $petService;

    public function __construct(PetServiceInterface $petService)
    {
        $this->petService = $petService;
    }

    public function index(): View
    {
        $pets = $this->petService->getAll();
        return view('pets.index', [
            'pets' => new PetCollection($pets)
        ]);
    }

    public function create(): View
    {
        return view('pets.create');
    }

    public function store(StorePetRequest $request): RedirectResponse
    {
        $result = $this->petService->create($request->validated());
        return $result
            ? redirect('/')->with('message', 'The pet has been successfully added.')
            : back()->with('error', 'Failed to add the pet.');
    }

    public function show(int $id): View
    {
        $pet = $this->petService->get($id);

        if (!$pet) {
            return redirect('/')->with('error', 'The requested pet could not be found.');
        }

        return view('pets.show', [
            'pet' => new PetResource($pet)
        ]);
    }

    public function edit(int $id): View
    {
        $pet = $this->petService->get($id);

        if (!$pet) {
            return redirect('/')->with('error', 'The requested pet could not be found.');
        }

        return view('pets.edit', [
            'pet' => new PetResource($pet)
        ]);
    }

    public function update(UpdatePetRequest $request, int $id): RedirectResponse
    {
        $result = $this->petService->update($id, $request->validated());
        return $result
            ? redirect('/')->with('message', 'The pet has been successfully updated.')
            : back()->with('error', 'Failed to update the pet.');
    }

    public function destroy(int $id): RedirectResponse
    {
        $result = $this->petService->delete($id);
        return $result
            ? redirect('/')->with('message', 'The pet has been successfully deleted.')
            : redirect('/')->with('error', 'Failed to delete the pet.');
    }
}
