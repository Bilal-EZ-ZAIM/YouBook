<?php

namespace App\Http\Controllers;

use App\Models\acheterLiverModeles;
use App\Models\livers;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return "salam bilal ezzaim";
    }
    public function inde()
    {
        $livres = livers::paginate(6);
        return view('bil', compact('livres'));
    }
}
