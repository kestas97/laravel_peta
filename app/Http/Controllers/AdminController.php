<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data['users'] = User::all();
        return view('admin.users-panel', $data);
    }

    public function approve($userId)
    {
        $user = User::find($userId);
        $user->active = 1;
        $user->save();
        return redirect(route('users.panel'));
    }



    public function destroy()
    {

    }
}
