<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saint;

class MainController extends Controller
{
    public function home() {

        $Saints = Saint::all();

        $data = [
            'saints' => $Saints
        ];

         return view('pages.home', $data);
    }
}
