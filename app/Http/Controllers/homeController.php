<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return "salam bilal ezzaim";
    }
    public function inde()
    {
        $livres = [
            [
                'id' => 1,
                'name' => 'Livre 1',
                'description' => 'Une courte description du Livre 1.',
            ],
            [
                'id' => 2,
                'name' => 'Livre 2',
                'description' => 'Une courte description du Livre 2.',
            ],
            [
                'id' => 3,
                'name' => 'Livre 3',
                'description' => 'Une courte description du Livre 3.',
            ],
            [
                'id' => 4,
                'name' => 'Livre 4',
                'description' => 'Une courte description du Livre 4.',
            ],
            [
                'id' => 5,
                'name' => 'Livre 5',
                'description' => 'Une courte description du Livre 5.',
            ],
        ];

        return view('bil', compact('livres'));
    }
}
