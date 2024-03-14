@extends('layout')

@section('content')
    <div style="font-family: Arial, sans-serif; background-color: #f5f5dc; margin-top: 50px; max-width: 800px; margin: 50px auto 0 auto; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <h1 style="font-size: 2rem; color: #8b4513; font-style: italic; margin-bottom: 20px;text-decoration: underline;
        text-align: center;">Contact Details Saved</h1>
        <div style="font-size: 1rem; color: #6c757d;">
        <ul>
            <li><span style="color: #8b4513; font-style: italic; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">Name:</span> {{ $nom }}</li><br/>
            <li><span style="color: #8b4513; font-style: italic; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">Prénom:</span> {{ $prenom }}</li><br/>
            <li><span style="color: #8b4513; font-style: italic; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">Téléphone:</span> {{ $tel }}</li><br/>
            <li><span style="color: #8b4513; font-style: italic; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">Email:</span> {{ $email }}</li><br/>
            <li><span style="color: #8b4513; font-style: italic; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">Date de naissance:</span> {{ $date_naiss }}</li><br/>
            <li><span style="color: #8b4513; font-style: italic; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">Genre:</span> {{ $genre }}</li><br/></br></br>
</ul>
<p><span style="color: #8b4513; font-style: italic; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">La date actuelle est :</span> {{ $currentDate }}</p></br>
<p>{{ $success }}</p>

        </div>
    </div>
@endsection






