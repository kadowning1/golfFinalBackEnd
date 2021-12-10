<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Team;
use App\Models\Group;
use App\Models\UserRole;
use App\Models\UserGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Log;

class UserController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return User::with(['team.teamGolfers', 'userGroups.group'])->where('id', $request->user()->id)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => $request->input('name'),
            'password' => $request->input('password'),
            'email' => $request->input('email'),
            'age' => $request->input('age')
        ]);

        return new UserResource($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

    }


    public function register(Request $request)
    {
      $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required'
      ]);
      if ($validator->fails()) {
        return response()->json([
          'success' => false,
          'message' => $validator->errors(),
        ], 401);
      }
      $input = $request->all();
      $input['password']=bcrypt($input['password']);
      $input['status']=true;
      $input['is_active']=true;
      $user = User::create($input);
      $success['token'] = $user->createToken('appToken')->accessToken;
      $event = "register";
      $createdAt = date("l jS \of F Y h:i:s A");

      //$group = Group::create(['name' => 'Group Name', 'user_id' => $user->id]);
      $group = new Group;
      $group->name = "Group Name";
      $group->user_id = $user->id;
      $group->save();

      $userGroup = UserGroup::create(['user_id' => $user->id, 'group_id' => $group->id]);
      $team = Team::create(['name' => 'Team Name', 'user_id' => $user->id, 'group_id' => $group->id]);
      $userGroup = UserGroup::create(['user_id' => $user->id, 'group_id' => $group->id]);

      return response()->json([
        'success' => true,
        'access_token' => $success,
        'user' => $user,
        'group' => $group,
        'user_group' => $userGroup,
        'team' => $team,
        'event' => $event,
        'created_at' => $createdAt
      ]);
    }

    public function logout(Request $request)
    { {
            if (Auth::user()) {
                $user = Auth::user()->token();
                $user->revoke();
                return response()->json([
                    'success' => true,
                    'message' => 'Logout successfully',
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Unable to Logout',
                ]);
            }
        }
    }
}
