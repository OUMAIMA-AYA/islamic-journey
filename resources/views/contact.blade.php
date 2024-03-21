@extends('layout')
@section('content')
</br>
    <h1 style="text-align: center;color: #8b4513;font-family: Georgia, 'Times New Roman', Times, serif;;">Inscription</h1></br>
    <form method="POST" action="{{ route('contacts.saveContact') }}">

    @csrf
        
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom"><br><br>
        
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom"><br><br>
        
        <label for="tel">Téléphone:</label>
        <input type="tel" id="tel" name="tel"><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        
        <label for="date_naiss">Date de naissance:</label>
        <input type="date" id="date_naiss" name="date_naiss"><br><br>
        
        <label>Genre:</label>
        <select name="genre">
            <option value=""> Sélectionner </option>
            <option value="female">Femme</option>
            <option value="male">Homme</option>
        </select><br><br>
        
        <input type="submit" value="Envoyer">
    </form>
@endsection
