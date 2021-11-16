<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\CheckoutResource;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CheckoutResource::collection(Checkout::all());
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
        $faker = \Faker\Factory::create(2);

        $checkout = Checkout::create([
            'return_date' => $faker->dateTimeBetween($startDate='now', $endDate='+1 month', $timezone = null),
            'checked_out' => $faker->randomDigit,
            'user_id' => User::all()->random()->id
        ]);
        return new CheckoutResource($checkout);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        return new CheckoutResource(($checkout));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
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
    public function update(Request $request, Checkout $checkout)
    {
        $checkout->update([
            'return_date' => $request->input('return_date'),
            'checked_out' => $request->input('checked_out'),
            'user_id' => $request->input('user_id')
        ]);

        return new CheckoutResource($checkout);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        $checkout->delete();
        return response(null, 204);
    }
}
