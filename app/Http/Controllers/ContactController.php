<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function saveContact(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'tel' => 'required|string',
            'email' => 'required|email',
            'date_naiss' => 'nullable|date',
           
        ]);

        // Create a new Contact instance with the validated data
        $contact = new contact($validatedData);

        // Save the contact to the database
        $contact->save();
        return view('/contact')->with('success', 'Contact ajouté avec succès !');

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