<?php

namespace App\Http\Controllers;

use App\Models\livers;
use App\Models\LiversResrveModeles;
use Illuminate\Http\Request;


class liversController extends Controller
{
    
    public function index()
    {
        $livers = livers::paginate(6);
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

        $id = $request->id;
        $returnDate = $request->returnDate;
        LiversResrveModeles::create([
            "user_id" => session('user_id'),
            "liver_id" => $id,
            "dateFinal" => $returnDate,
        ]);
        return redirect()->route('liversAllAcheter');
    }
  

}
