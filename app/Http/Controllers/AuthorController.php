<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::latest()->paginate(10);
        return [
            "status" => 1,
            "data" => $authors
        ];
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
        $request->validate([
            'abbreviation' => 'abbreviation',
            'first_name' => 'first_name',
            'last_name' => 'last_name',
            'date_of_birth' => 'date_of_birth',
            'date_of_death' => 'date_of_death',
            'area_of_interest' => 'area_of_interest',
            'nom_standard' => 'nom_standard',
        ]);

        $author = Author::create($request->all());
        return [
            "status" => 1,
            "data" => $author
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        return [
            "status" => 1,
            "data" =>$author
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        $request->validate([
            'abbreviation' => 'abbreviation',
            'first_name' => 'first_name',
            'last_name' => 'last_name',
            'date_of_birth' => 'date_of_birth',
            'date_of_death' => 'date_of_death',
            'area_of_interest' => 'area_of_interest',
            'nom_standard' => 'nom_standard',
        ]);

        $author->update($request->all());

        return [
            "status" => 1,
            "data" => $author,
            "msg" => "Author updated successfully"
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return [
            "status" => 1,
            "data" => $author,
            "msg" => "Author deleted successfully"
        ];
    }
}
