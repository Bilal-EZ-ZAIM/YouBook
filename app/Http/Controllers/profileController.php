<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index()
    {
        $profile = Profile::all();
        return view('profile' , compact('profile'));
    }
    public function create()
    {
        
        return view('profile' , ['nom' => "je suis profile pages"]);
    }
    
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $bio = $request->bio;
        Profile::create([
            "name" => $name,
            "email" => $email,
            "password" => $password,
            "bio" => $bio,
        ]);
        return redirect()->route('bilanox');
    }
}

