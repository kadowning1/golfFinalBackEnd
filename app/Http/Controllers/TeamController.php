<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Group;
use App\Models\UserGroup;
use Illuminate\Http\Request;
use App\Http\Resources\TeamsResource;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->id);
        $teamgroup = UserGroup::with(['group.teams.teamScore', 'user.team'])->where('user_id', '=', $request->user()->id)
        // ->where('group_id', '=', $request->group_id)
        ->get();
        return $teamgroup->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $user = $request->user();

        // $group = new Team;
        // $group->name = $request->name;
        // $group->user_id = $request->user()->id;
        // $group->group_id = $request->user()->id;
        // $group->save();

        // return $group->toArray();


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
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return TeamsResource::collection(Team::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
    public function update_team(Request $request)
    {
        $team = Team::find($request->team_id);
        $team->name = $request->name;
        $team->save();
    }
    public function getGroupStandings(Request $request)
    {
        $group = UserGroup::with('user.team.teamscore', 'group.userGroups.user.team.teamscore')
        ->where('user_id', '=', $request->user()->id)
        ->get();
        return $group->toArray();
    }

}
