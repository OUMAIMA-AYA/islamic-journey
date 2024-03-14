<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
}

}
