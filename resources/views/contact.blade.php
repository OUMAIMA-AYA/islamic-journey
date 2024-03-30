@extends('layout')
@section('content')
</br>
    <h1 style="text-align: center;color: #8b4513;font-family: Georgia, 'Times New Roman', Times, serif;;">Inscription</h1></br>
    <form method="POST" action="{{ route('contacts.saveContact') }}">

    @csrf
        
        <label for="nom">second name:</label>
        <input type="text" id="nom" name="nom"><br><br>
        
        <label for="prenom">first name :</label>
        <input type="text" id="prenom" name="prenom"><br><br>
        
        <label for="tel">phone:</label>
        <input type="tel" id="tel" name="tel"><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label>password:</label>
        <input type="password" name="password"/><br><br>
        
        <label for="date_naiss">date of birth:</label>
        <input type="date" id="date_naiss" name="date_naiss"><br><br>
        <input type="submit" value="Envoyer">
    </form>
@endsection
