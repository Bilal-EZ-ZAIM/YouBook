<?php

namespace App\Http\Controllers;

use App\Models\livers;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class profileController extends Controller
{
    public function index()
    {
        $profile = Profile::where('id', 3)->first();
        return view('profile', compact('profile'));
    }
    public function admin()
    {
        $wiki = livers::all();
        $categori = [];
        $tag = [];
        $data = [];
        return view('dashbordAdmin', compact('wiki', 'tag', 'categori', 'data'));
    }
    public function create()
    {

        return view('profile', ['nom' => "je suis profile pages"]);
    }
    public function register()
    {

        return view('register', ['nom' => "je suis profile pages"]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:profiles|max:255',
            'password' => 'required|min:6',
            'bio' => 'nullable|string',
        ]);

        Profile::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'bio' => $request->bio,
        ]);

        return redirect()->route('bilanox');
    }
    public function creat()
    {

        return view('login', ['nom' => "je suis profile pages"]);
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $profile = Profile::where('email', $email)->first();

        if ($profile) {
            if (Hash::check($password, $profile->password)) {
                Session::put('user_id', $profile->id);
                return redirect()->route('bilanox');
            }
        }
        return redirect()->back()->withErrors(['error' => 'Invalid credentials'])->withInput();
    }
    public function logout()
    {
        Session::put('user_id', null);
        return redirect()->route('login');
    }
}
