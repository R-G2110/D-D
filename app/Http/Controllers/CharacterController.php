<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    public function index()
    {
        $characters= Character::all();
        if (empty($characters)) {
            abort(404);
        }
        return view("home", compact("characters"));
    }
}
