<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index()
    {
        $profile = User::paginate(10);

        return view('aboutes', compact('profile'));
    }

}
