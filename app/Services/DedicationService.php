<?php

namespace App\Services;

use App\Models\Dedication;
use Illuminate\Support\Str;

class DedicationService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }


    public function createDedication(array $data)
    {

        $inputs = [];
        $inputs['status'] = (bool) ($data['status'] ?? false);
        $inputs['slug'] = Str::slug($data['name']);

        $count = 1;
        while (Dedication::where('slug', $inputs['slug'])->exists()) {
            $inputs['slug'] = Str::slug($data['name']) . '-' . $count;
            $count++;
        }

        $data = array_merge($data, $inputs);

        try {
            $dedication = Dedication::create($data);

            return $dedication;
        } catch (\Exception $e) {
            logger()->error('Error creating dedication: ' . $e->getMessage());
            return null;
        }
    }

    public function updateDedication(Dedication $dedication, array $data)
    {
        $inputs = [];
        $inputs['status'] = (bool) ($data['status'] ?? false);

        $data = array_merge($data, $inputs);

        try {
            $dedication->update($data);

            return $dedication;
        } catch (\Exception $e) {
            logger()->error('Error updating dedication: ' . $e->getMessage());
            return null;
        }
    }
}
