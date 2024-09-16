<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Artist extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function tracks(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Track::class, 'artist_track');
    }

    public function albums()
    {
        return $this->belongsToMany(Album::class, 'artist_track')
            ->join('album_track', 'artist_track.track_id', '=', 'album_track.track_id')
            ->select('albums.*')
            ->distinct();
    }
    
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}