<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function saveContact(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'tel' => 'nullable|string',
            'email' => 'nullable|email',
            'date_naiss' => 'nullable|date',
            'genre' => 'nullable|in:female,male',
        ]);

        // Création d'un nouveau contact
        $contact = new Contact();
        $contact->nom = $request->input('nom');
        $contact->prenom = $request->input('prenom');
        $contact->tel = $request->input('tel');
        $contact->email = $request->input('email');
        $contact->date_naiss = $request->input('date_naiss');
        $contact->genre = $request->input('genre');
        $contact->save();

        // Redirection avec un message de succès
        return redirect()->back()->with('success', 'Contact ajouté avec succès !');
    }
}








































/*namespace App\Http\Controllers;

use App\Models\Contact; // Importez le modèle Contact
use Illuminate\Http\Request;

class ContactController extends Controller
{
 public function saveContact(Request $request)
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
}}*/