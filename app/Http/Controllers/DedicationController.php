<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDedicationRequest;
use App\Http\Requests\UpdateDedicationRequest;
use App\Models\Dedication;

class DedicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDedicationRequest $request)
    {
        //
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
