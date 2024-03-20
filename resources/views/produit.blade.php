@extends('layout')

@section('content')
    <h1 style="text-align: center;color: #8b4513;  font-family: Georgia, 'Times New Roman', Times, serif;;margin: 15px;">Our Products</h1>
    <br>
    <div class="products" style="text-align: center;">
        @foreach ($data as $p)
            <div class="product" style="display: inline-block; margin: 10px;">
                <img src="{{ $p['image'] }}" alt="{{ $p['name'] }}" style="max-width: 200px; max-height: 200px; border-radius:15px;">
                <h4 style="color: black;margin: 5px;">{{ $p['name'] }}</h4>
                <p style="font-style: italic; margin-bottom: 11px;">Price: {{ $p['price'] }}</p>
                <a href="{{ route('product-details', ['id'=> $p['id']]) }}"><input type="button" value="More details" style="font-style: italic;"></a>
            </div>
        @endforeach
    </div>
@endsection

