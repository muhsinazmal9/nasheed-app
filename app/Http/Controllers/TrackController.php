<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrackRequest;
use App\Models\Track;
use Illuminate\Http\JsonResponse;
use App\Models\Artist;
use App\Models\Lyricist;
use App\Services\TrackService;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;


class TrackController extends Controller
{

    public function __construct(private TrackService $trackService)
    {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.tracks.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $artists = Artist::active()->get();
        $lyricists = Lyricist::active()->get();
        return view('backend.tracks.create', compact('artists', 'lyricists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrackRequest $request)
    {
        $createdTrack = $this->trackService->createTrack($request);

        if ($createdTrack) {
            return redirect()->route('tracks.index');
        } else {
            return redirect()->back()->with('error', 'Track Creation Failed');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Track $track)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Track $track)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Track $track)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Track $track)
    {
        //
    }

    public function search(Request $request): JsonResponse
    {
        $search = $request->q;

        if ($search == '') {
            return success(data: []);
        }

        $tracks = Track::where(function ($query) use ($search) {
            $query->where('title', 'like', "%$search%");
        })->get();

        return success(data: $tracks);
    }
    public function getDataTablesList(Request $request)
    {
        $tracks = $this->trackService->getDataTablesList($request);
        $data = $tracks->getData()->data;
        if ($tracks->getData()->success) {
            return success('Tracks retrieved successfully', $data->data);
        } else {
            return error($tracks->getData()->message, $data->data);
        }
    }
}
