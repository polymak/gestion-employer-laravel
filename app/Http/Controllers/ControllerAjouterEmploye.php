<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employer;

class ControllerAjouterEmploye extends Controller
{
    public function addemploye(){
        return view('ajouter-employe');
    }

    public function ajouter_employer_intable(Request $request){
        $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'fonction'=> 'required',
        ]);

        $employer= new Employer();
        $employer->nom=$request->nom;
        $employer->prenom=$request->prenom;
        $employer->fonction=$request->fonction;
        $employer->save();

        return redirect('/ajouter-employe')->with('status', 'L\'Employé ajouté avec succès');

    }
}
