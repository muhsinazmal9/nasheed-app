<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDedicationRequest;
use App\Http\Requests\UpdateDedicationRequest;
use App\Models\Dedication;
use App\Services\DedicationService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use App\Traits\ImageSaveTrait;
use Illuminate\Http\Request;

class DedicationController extends Controller
{
    use ImageSaveTrait;
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
     * Store a newly created resource in storage.
     */
    public function store(StoreDedicationRequest $request): RedirectResponse
    {
        $createdDedication = $this->dedicationService->createDedication($request);

        if (!$createdDedication) {
            return redirect()->back()->with('error', 'Dedication Creation Failed');
        }

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
        return view('backend.dedications.edit', compact('dedication'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dedication $dedication)
    {
            $request->validate([
                    'name' => 'required',
                    'description' => 'required',
                ]);

            if ($request->hasFile('image')) {
                if (!empty($dedication->image)) {
                    $this->deleteImage(public_path('uploads/dedication/' . $dedication->image));
                }

                $image_name = $this->saveImage('dedication', $request->file('image'), 400, 400);

                $dedication->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'image' => $image_name,
                ]);
            }
            else{
                $dedication->update([
                    'name' => $request->name,
                    'description' => $request->description,
                ]);
            }

            return redirect()->route('dedications.index')->with('success', 'Dedication Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dedication $dedication)
    {
        try {
            $dedication->delete();
            return success('Dedication Deleted Successfully');
        } catch (\Exception $e) {
            logger()->error('Error deleting dedication: ' . $e->getMessage());
            return error('Error deleting dedication');
        }
    }

    public function updateStatus(Dedication $dedication): JsonResponse
    {
        try {
            $dedication->update(['status' => !$dedication->status]);
            return success('Dedication Status Updated Successfully');
        } catch (\Exception $e) {
            logger()->error('Error updating dedication status: ' . $e->getMessage());
            return error('Error updating dedication status');
        }
    }

    public function search(Request $request): JsonResponse
    {
        $search = $request->q;

        $dedications = Dedication::query();

        if ($search == '') {
            $dedications = $dedications->take(5)->get();
            return success(data: $dedications);
        }

        $dedications = $dedications->where(function ($query) use ($search) {
            $query->where('name', 'like', "%$search%")
                ->orWhere('slug', 'like', "%$search%");
        })->get();

        return success(data: $dedications);
    }
}
