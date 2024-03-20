<?php

namespace App\Http\Controllers;

use App\Models\Contact; // Importez le modèle Contact
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function saveContact(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'tel' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'date_naiss' => 'nullable|date',
            'genre' => 'nullable|in:female,male',
        ]);

        Contact::create($validatedData);

        return redirect('/')->with('success', 'Contact enregistré avec succès!');
    }
}













   /* public function saveContact(Request $request)
{
    $nom = $request->input('nom');
    $prenom = $request->input('prenom');
    $tel = $request->input('tel');
    $email = $request->input('email');
    $date_naiss = $request->input('date_naiss');
    $genre = $request->input('genre');
    $currentDate = $request->input('currentDate');
    $success= $request->input('success');
    return view('saveContact', ['nom'=> $nom , 'prenom'=> $prenom , 'tel'=>$tel ,'email'=>$email , 'date_naiss'=>$date_naiss,'genre'=>$genre, 'currentDate'=>$currentDate , 'success' => $success]
    //compact('nom', 'prenom', 'tel', 'email', 'date_naiss', 'genre', 'currentDate')
);
}*/

