@extends('layout')

@section('content')
<style>
#ul {
    list-style-type: none;
    padding: 0;
    text-align: center; /* Center the list items */
}

#ul li {
    display: inline-block; /* Display list items horizontally */
    margin: 0 10px; /* Add margin between list items */
    font-size: 15px; /* Increase font size for a livelier look */
    color: #8b4513; /* Brown */
    border: 1px solid #8b4513; /* Brown border */
    border-radius: 20px; /* Rounded corners */
    padding: 8px 15px; /* Padding */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Shadow */
}

#ul li:before {
    content: "\2022"; /* Bullet character */
    margin-right: 5px; /* Add spacing between bullet and text */
}

 .h1h2 {
    font-family: Georgia, 'Times New Roman', Times, serif;
    text-align: center; /* Center the text */
    color: #555; /* Medium gray */
    margin: 20px auto; /* Center the element horizontally and add space below */
    border: 1px solid #8b4513; /* Brown border */
    border-radius: 10px; /* Rounded corners */
    padding: 10px; /* Add padding inside the border */
    width: 50%;
    box-shadow: 0 2px 4px rgba(139, 69, 19, 0.2); /* Brown shadow */
}
    form button[type="submit"] {
    background-color: #8b4513; /* Brown */
    color: white;
    width:60%;
    padding: 14px 15px;
    margin-left: 85px;
    border: none;
    border-radius: 20px;
        cursor: pointer;}

    </style>
</br>
<div>
<h2 style="text-align:center; color:  #8b4513;">Calculator of Zakat</h2>
<div>
<div class="h1h2">
<h3 >Six conditions of Muslim's wealth determine if he or she must pay Zakat from it:</h3>
<br></div>
<ul id='ul'>
    <li>Absolute Ownership</li>
    <li>Growth</li>
    <li>Minimum Quantity</li>
    <li>Abundance Above Need</li>
    <li>Solvency (Freedom from Debt)</li>
    <li>Lapse of a Lunar Year (or Time of Harvest)</li>
</ul></div><br>
<form action="zakat" method="post">
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
    </br><br>
 
    <button type="submit">Calculate Zakat</button>
</form>


@endsection
