@extends('layout')

@section('content')
<style>
.container {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    max-width: 1200px;
    margin: 0 auto;
}

.text {
    flex: 1;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
}

.form {
    flex: 1;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
}

.h1h2 {
    margin-bottom: 20px;
    padding: 10px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 25px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

#ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

#ul li {
    margin-bottom: 10px;
    padding-left: 20px;
    position: relative;
}

#ul li:before {
    content: "\2022";
    position: absolute;
    left: 0;
    color: #8b4513;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #8b4513;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #6e2d08;
}

</style>
<br><br>
<div class="form">
<h2 style="color: #8b4513;text-align:center;font-family: Georgia, 'Times New Roman', Times, serif; ">Calculator of Zakat</h2><br><br>
        <form action='/zakat' method="post">
            @csrf
            <label for="gold">Gold (grams):</label>
            <input type="text" name="gold" id="gold" value="0"><br><br>

            <label for="silver">Silver (grams):</label>
            <input type="text" name="silver" id="silver" value="0"><br><br>

            <label for="cash">Cash (USD):</label>
            <input type="text" name="cash" id="cash" value="0"><br><br>

            <label for="investments">Investments (USD):</label>
            <input type="text" name="investments" id="investments" value="0"><br>

            @if(isset($zakat))
            Your Zakat amount is: <strong>{{ $zakat }}</strong>$
            @endif
            <br><br>

            <button type="submit">Calculate Zakat</button>
        </form>

</div>

@endsection