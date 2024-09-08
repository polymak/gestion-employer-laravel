<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControllerAccueil;
use App\Http\Controllers\ControllerListeemploye;
use App\Http\Controllers\ControllerAjouterEmploye;
use App\Http\Controllers\ControllerModifier;
use App\Http\Controllers\ControllerSupprimer;


Route::get('/', [ControllerAccueil::class, 'index']);
Route::get('/listeemploye', [ControllerListeemploye::class, 'employeliste']);
Route::get('/ajouter-employe', [ControllerAjouterEmploye::class, 'addemploye']);
Route::get('/supprimer-employe/{id}', [ControllerSupprimer::class, 'supprimeremploye']);
Route::get('/modifier-employe/{id}', [ControllerModifier::class, 'modifieremploye']);
Route::post('/ajouter/traitement', [ControllerAjouterEmploye::class, 'ajouter_employer_intable']);
Route::post('/modifier/traitement', [ControllerModifier::class, 'modifier_traitement']);

