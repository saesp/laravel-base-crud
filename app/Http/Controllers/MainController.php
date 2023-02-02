<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saints;

class MainController extends Controller
{
    public function index()
    {

        $saints = Saints::all();

        $data = [
            'saints' => $saints
        ];

        return view('pages.home', $data);
    }

// public function show($id) {

//     $player = Player::find($id);

//     $data = [
//         'player' => $player
//     ];

//     return view('pages.player', $data);
// }
}