@extends('layout')

@section('content')
<style>
    body {
        background-image: url('');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .product {
        display: inline-block;
        margin: 7px;
        text-align: center;
    }

    .product img {
        max-width: 200px;
        max-height: 160px;
        border-radius: 15px;
    }

    .product h4 {
        color: black;
        margin: 5px;
    }

    .product p {
        font-style: italic;
        margin-bottom: 11px;
    }

    .product button {
        font-style: italic;
        background-color: #8b4513;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 8px 16px;
        cursor: pointer;
    }

    .product button:hover {
        background-color:   #7a3d0f;
    }
</style>

</br>
<h1 style="text-align: center;color: #8b4513; font-family: Georgia, 'Times New Roman', Times, serif;margin: 15px;">Our Products</h1>
<div class="products" style="text-align: center;">
    <br>
    @foreach ($data as $p)
    <div class="product">
        <img src="{{ $p['image'] }}" alt="{{ $p['name'] }}">
        <h4>{{ $p['name'] }}</h4>
        <p>Price: <span id="price{{ $p['id'] }}">{{ $p['price'] }}</span></p>
        Quantity : <button onclick="incrementPrice('{{ $p['id'] }}', '{{ $p['price'] }}')">+</button></BR></BR>
        <a href="{{ route('product-details', ['id'=> $p['id']]) }}"><button>More details</button></a>
        <button onclick="">Buy Now</button>
    </div>
    @endforeach
</div>

<script>
    function incrementPrice(productId, currentPrice) {
        var priceSpan = document.getElementById('price' + productId);
        var quantity = parseInt(prompt("Enter the quantity:"));
        if (!isNaN(quantity)) {
            currentPrice = parseFloat(currentPrice);
            var newPrice = currentPrice * quantity;
            priceSpan.innerText = newPrice.toFixed(2) + '$';
        }
    }
</script>
@endsection
