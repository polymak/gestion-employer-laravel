<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employer;

class ControllerSupprimer extends Controller
{
    public function supprimeremploye($id){
        $employer = Employer::find($id);
        $employer->delete();
        return redirect('/listeemploye')->with('status', 'L\'Employé supprimé avec succès');
    } 
}
