<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saints;

class MainController extends Controller
{
    public function home()
    {
        $saints = Saints::all();

        $data = [
            'saints' => $saints
        ];

        return view('pages.home', $data);
    }


    // show a specific id
    public function show($id)
    {
        $saints = Saints::find($id);

        $data = [
            'saints' => $saints
        ];

        return view('pages.saints_show', $data);
    }


    public function delete(Saints $id)
    {
        $id->delete();
        return redirect()->route('home');
    }


    public function create()
    {
        return view('pages.saints_create');
    }


    public function store(Request $request)
    {
        $data = $request;

        $saints = new Saints();

        $saints->name = $data['name'];
        $saints->birth_place = $data['birth_place'];
        $saints->blassing_date = $data['blassing_date'];
        $saints->miracles_count = $data['miracles_count'];

        $saints->save();

        return redirect()->route('home');
    }
}