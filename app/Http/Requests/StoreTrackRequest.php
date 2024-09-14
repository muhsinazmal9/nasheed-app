<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrackRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'lyricist_id' => 'required',
            'artist_id.*' => 'required', 'array', 'exists:artists,id',
            'dedication_id' => 'required',
            'cover_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'audio_file' => 'mimes:mp3,m4a,wav',
        ];
    }
}
