<?php

namespace App\Http\Resources;

use App\Models\Lyricist;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TrackResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'lyricist' => new LyricistResource($this->lyricist),
            'dedication' => new DedicationResource($this->dedication),
            'artists' => ArtistResource::collection($this->artists),
            'audio_file' => $this->audio_file ? asset($this->audio_file) : null,
            'cover_image' => $this->cover_image ? asset($this->cover_image) : null,
            'description' => $this->description,
        ];
    }
}
