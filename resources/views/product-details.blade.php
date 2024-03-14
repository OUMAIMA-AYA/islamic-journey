@extends('layout')

@section('content')
    <style>
        .content {
            background-color: beige;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: justify;
            margin: 20px auto; 
            max-width: 800px; 
        }

        h3 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #8b4513; 
            font-style: italic; 
            font-weight: bold; 
            text-decoration: underline;
            text-align: center;
        }

        p {
            font-size: 15px;
            color:black; 
            font-style: italic; 
            font-weight: bold; 
        }
    </style>

    <div class="content">
        <div>
        <h3>{{ $produit['name'] }}</h3>
         <p>{{ $produit['details'] }}</p>
        </div>
    </div>
@endsection
