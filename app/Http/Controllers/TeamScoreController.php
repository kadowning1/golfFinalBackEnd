<?php

namespace App\Http\Controllers;

use App\Models\TeamScore;
use Illuminate\Http\Request;
use App\Http\Resources\TeamScoreResource;

class TeamScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TeamScoreResource::collection(TeamScore::all());
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
     * @param  \App\Models\TeamScore  $teamScore
     * @return \Illuminate\Http\Response
     */
    public function show(TeamScore $teamScore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamScore  $teamScore
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamScore $teamScore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeamScore  $teamScore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamScore $teamScore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamScore  $teamScore
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamScore $teamScore)
    {
        //
    }

    public function gettotal(Request $request)
    {
        $score = TeamScore::with(['team_score'])->where('score', $request->user()->score)->get()->toArray();
        return response(['data' => $score, 'message' => 'Found team total successfully', 'status' => true]);
    }
}
