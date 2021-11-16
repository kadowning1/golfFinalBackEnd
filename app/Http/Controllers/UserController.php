<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Requests\UserRequest;

class UserController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $userRoles = UserRole::with('role')->where('user_id', $user->id)->get();
        $userRole = $userRoles[0];

        // dd($userRole);

        if ($userRole->role->label == 'Cardholder') {
            return 'Not authorized';
        } else {
            return UserResource::collection(User::all());
        }
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
    public function store(UserRequest $request)
    {
        // return 'TEST';
        $faker = \Faker\Factory::create(2);

        $user = User::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => $faker->password
        ]);
        return new UserResource($user);
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
            'email' => $request->input('email')
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
        $user->delete();
        return response(null, 204);
    }
}
