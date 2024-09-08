<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employer;

class ControllerModifier extends Controller
{
    public function modifieremploye($id){
        $employerd = Employer::find($id);
        return view('modifier-employe', compact('employerd'));
    }

    public function modifier_traitement(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'fonction'=>'required',
        ]);

        $employer = Employer::find($request->id);
        $employer->nom=$request->nom;
        $employer->prenom=$request->prenom;
        $employer->fonction=$request->fonction;
        $employer->update();
        return redirect('/listeemploye')->with('status', 'L\'Employé modifié avec succès');
    }
}
