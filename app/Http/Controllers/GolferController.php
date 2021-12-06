<?php

namespace App\Http\Controllers;

use App\Models\Golfer;
use App\Models\TeamGolfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


use App\Http\Resources\GolfersResource;

class GolferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Golfer  $golfer
     * @return \Illuminate\Http\Response
     */
    public function show(Golfer $golfer)
    {
        return GolfersResource::collection(Golfer::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Golfer  $golfer
     * @return \Illuminate\Http\Response
     */
    public function edit(Golfer $golfer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Golfer  $golfer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Golfer $golfer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Golfer  $golfer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Golfer $golfer)
    {
        //
    }



    public function addToTeam(Request $request)
    {
        Log::debug($request);
        $user = $request->user();
        Log::debug($user);
        $teamgolfer = new Golfer;
        $teamgolfer->golfer_id = $teamgolfer->id;
        $teamgolfer->team_id = $request->team_id;
        $teamgolfer->save();
    }

    public function removeFromTeam(Golfer $golfer)
    {
        $teamGolfers = TeamGolfer::all()->where('golfer_id', $golfer->id)->toArray();

        foreach ($teamGolfers as $id => $teamGolfer) {
            // dd($authorBook);
            $golferTeam = TeamGolfer::find($teamGolfer['id']);
            $golferTeam->delete();
        }
        // $golfer->delete();
        return response(null, 204);
    }
}
