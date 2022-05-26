<?php

namespace App\Http\Controllers;

use App\Models\PetStatus;
use Illuminate\Http\Request;

class PetStatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //create form new pet status
    public function createStatus()
    {
        return view('status.form');
    }

    //store new pet status
    public function store(Request $request)
    {
        $status = new PetStatus();

        $status->name = $request->post('name');
        $status->save();
//        return redirect()->route('create.status');
        return back()->withErrors([
            'name' => 'status created successfully',
        ])->onlyInput('name');
    }

    //delete pet status
    public function destroy()
    {
        //
    }
}
