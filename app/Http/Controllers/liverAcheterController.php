<?php

namespace App\Http\Controllers;

use App\Models\acheterLiverModeles;
use Illuminate\Http\Request;

class liverAcheterController extends Controller
{
    //
      public function getAllData()
    {
        $livers = acheterLiverModeles::join('livers', 'acheter_liver_modeles.liver_id', '=', 'livers.id')
            ->select('acheter_liver_modeles.*', 'livers.*')
            ->get();
            
        return view('liversAllAcheter' , compact('livers'));
    }
}
