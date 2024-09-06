<?php

namespace App\Services;

use App\Models\Dedication;
use Illuminate\Support\Str;
use App\Http\Requests\StoreDedicationRequest;
use App\Http\Requests\UpdateDedicationRequest;
use App\Traits\ImageSaveTrait;

class DedicationService
{
    use ImageSaveTrait;
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }


    public function createDedication(StoreDedicationRequest $request)
    {

        $inputs = [];
        $inputs['status'] = (bool) ($request['status'] ?? false);
        $inputs['slug'] = Str::slug($request['name']);

        $count = 1;
        while (Dedication::where('slug', $inputs['slug'])->exists()) {
            $inputs['slug'] = Str::slug($request['name']) . '-' . $count;
            $count++;
        }

        if ($request->hasFile('image')) {
            $image_name = $this->saveImage('dedication', $request->file('image'), 400, 400);
            $inputs['image'] = $image_name;
        }

        $request = array_merge($request->all(), $inputs);



        try {
            $dedication = Dedication::create($request);

            return $dedication;
        } catch (\Exception $e) {
            logger()->error('Error creating dedication: ' . $e->getMessage());
            return null;
        }
    }

    public function updateDedication(Dedication $dedication, UpdateDedicationRequest $request)
    {
        $inputs = [];
        $inputs['status'] = (bool) ($request['status'] ?? false);

        $request = array_merge($request, $inputs);

        try {
            $dedication->update($request);

            return $dedication;
        } catch (\Exception $e) {
            logger()->error('Error updating dedication: ' . $e->getMessage());
            return null;
        }
    }
}
