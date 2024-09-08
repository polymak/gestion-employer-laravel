<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employer;

class ControllerListeemploye extends Controller
{
    public function employeliste(){
        $employerss = Employer::paginate(3);
        return view('listeemploye', compact('employerss'));
    }
}
