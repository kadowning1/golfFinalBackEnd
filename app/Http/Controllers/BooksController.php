<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Models\BookAuthor;
use App\Http\Resources\BooksResource;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BooksResource::collection(Book::all());
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

        $book = Book::create([
            'name' => $faker->name,
            'description' => $faker->sentence,
            'publication_year' => $faker->year,
            'isbn' => (string)$faker->isbn13,
            'checked_out' => false
        ]);
        return new BooksResource($book);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return new BooksResource(($book));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'publication_year' => $request->input('publication_year'),
            'isbn' => $request->input('isbn'),
            'checked_out' => $request->boolean(true)
        ]);

        return new BooksResource($book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $bookAuthors = BookAuthor::all()->where('book_id', $book->id)->toArray();
        // dd($bookAuthors);
        foreach ($bookAuthors as $id => $bookAuthor) {
            $bookAuthorDelete = BookAuthor::find($bookAuthor['id']);
            // dd($bookAuthorDelete);
            $bookAuthorDelete->delete();
        }

        $checkouts = Checkout::all()->where('user_id', $book->id)->toArray();
        if (count($checkouts) > 0) {
            // dd($checkouts);
            foreach ($checkouts as $id => $CheckoutItem) {
                $checkout = Checkout::find($CheckoutItem['id']);
                $checkout->delete();
            }
        }
        $book->delete();
        return response(null, 204);
    }
}
