<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDedicationRequest;
use App\Http\Requests\UpdateDedicationRequest;
use App\Models\Dedication;
use App\Services\DedicationService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class DedicationController extends Controller
{
    public function __construct(
        private DedicationService $dedicationService
    )
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $dedications = Dedication::latest()->get();

        return view('backend.dedications.index', compact('dedications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('backend.dedications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDedicationRequest $request): RedirectResponse
    {
        $this->dedicationService->createDedication($request->validated());
        // Dedication::create($request->validated());
        return redirect()->route('dedications.index')->with('success', 'Dedication Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dedication $dedication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dedication $dedication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDedicationRequest $request, Dedication $dedication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dedication $dedication)
    {
        //
    }
}
