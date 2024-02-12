<?php

namespace App\Http\Controllers;

use App\Models\acheterLiverModeles;
use App\Models\LiversResrveModeles;
use Illuminate\Http\Request;

class liverAcheterController extends Controller
{
    //
    public function getAllData()
    {
        $livers = LiversResrveModeles::join('livers', 'livers_resrve_modeles.liver_id', '=', 'livers.id')
        ->where('livers_resrve_modeles.user_id', session('user_id'))
        ->get();

        return view('liversAllAcheter', compact('livers'));
    }
}
