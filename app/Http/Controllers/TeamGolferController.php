<?php

namespace App\Http\Controllers;

use App\Models\TeamGolfer;
use Illuminate\Http\Request;

class TeamGolferController extends Controller
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
     * @param  \App\Models\TeamGolfer  $teamGolfer
     * @return \Illuminate\Http\Response
     */
    public function show(TeamGolfer $teamGolfer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamGolfer  $teamGolfer
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamGolfer $teamGolfer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeamGolfer  $teamGolfer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamGolfer $teamGolfer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamGolfer  $teamGolfer
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamGolfer $teamGolfer)
    {
        //
    }

    public function addToTeam(Request $request)
    {
        $teamgolfer = new TeamGolfer;
        $teamgolfer->golfer_id = $request->golfer_id;
        $teamgolfer->team_id = $request->team_id;
        $teamgolfer->save();
    }

    public function removeFromTeam(Request $request)
    {
        $teamGolfer = TeamGolfer::where('golfer_id', '=', $request->golfer_id)->where('team_id', '=',$request->team_id);
        $teamGolfer->delete();
        return response('Deleted Golfer From Team Successfully', 204);
    }
}
