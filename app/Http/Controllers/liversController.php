<?php

namespace App\Http\Controllers;

use App\Models\acheterLiverModeles;
use App\Models\livers;
use Illuminate\Http\Request;

class liversController extends Controller
{
    public function index()
    {
        $livers = livers::paginate(5);
        return view('liversAll', compact('livers'));
    }
    public function create()
    {
        return view('livers', ['nom' => "je suis profile pages"]);
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $bio = $request->bio;
        livers::create([
            "name" => $name,
            "bio" => $bio,
        ]);
        return redirect()->route('bilanox');
    }
    public function acheter(Request $request)
    {

        $id = $request->livre_id;
        acheterLiverModeles::create([
            "user_id" => 2,
            "liver_id" => $id,
        ]);
        return redirect()->route('bilanox');
    }
  

}
