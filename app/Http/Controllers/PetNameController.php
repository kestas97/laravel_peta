<?php

namespace App\Http\Controllers;

use App\Models\PetName;
use App\Http\Requests\StorePetNameRequest;
use App\Http\Requests\UpdatePetNameRequest;

class PetNameController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        return view('pet.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePetNameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePetNameRequest $request)
    {
        $petName = new PetName();

        $petName->name = $request->post('name');
        $petName->save();
        return redirect()->route('pet-name.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PetName  $petName
     * @return \Illuminate\Http\Response
     */
    public function show(PetName $petName)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PetName  $petName
     * @return \Illuminate\Http\Response
     */
    public function edit(PetName $petName)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePetNameRequest  $request
     * @param  \App\Models\PetName  $petName
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePetNameRequest $request, PetName $petName)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PetName  $petName
     * @return \Illuminate\Http\Response
     */
    public function destroy(PetName $petName)
    {
        //
    }
}
