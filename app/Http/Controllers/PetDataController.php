<?php

namespace App\Http\Controllers;

use App\Models\PetData;
use App\Http\Requests\StorePetDataRequest;
use App\Http\Requests\UpdatePetDataRequest;
use App\Models\PetName;
use App\Models\PetStatus;
use Illuminate\Support\Facades\Auth;

class PetDataController extends Controller
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

    public function userPetData()
    {
        $id = Auth::id();
        $data['petsData'] = PetData::where('user_id', $id)->get();
        return view('pet-data.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['petNames'] = PetName::all();
        $data['petStatuses'] = PetStatus::all();

        return view('pet-data.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePetDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePetDataRequest $request)
    {
        $petData = new PetData();


        $petData->pet_id = $request->post('pet_id');
        $petData->user_id = Auth::id();
        $petData->status_id = $request->post('status_id');
        $petData->quantity = $request->post('quantity');
        $petData->period = $request->post('period');
        $petData->save();

        return redirect()->route('pet-data.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PetData  $petData
     * @return \Illuminate\Http\Response
     */
    public function show(PetData $petData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PetData  $petData
     * @return \Illuminate\Http\Response
     */
    public function edit(PetData $petData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePetDataRequest  $request
     * @param  \App\Models\PetData  $petData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePetDataRequest $request, PetData $petData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PetData  $petData
     * @return \Illuminate\Http\Response
     */
    public function destroy(PetData $petData)
    {
        //
    }
}
