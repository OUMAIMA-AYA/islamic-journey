@extends('layout')

@section('content')
<style>

.text {
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
    width: 80%; /* Adjusted width */
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

.button {
    width: 20%;
    padding: 10px;
    background-color: #8b4513;
    color: #fff;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    margin-left: 50%;
}

.button a{
    text-decoration: none;
    color: white;
}

.button:hover {
    background-color: #6e2d08;
}

.container {
    display: flex;
    align-items: flex-start;
}

</style>
<br>
<h2 style="color: #8b4513;text-align:center;font-family: Georgia, 'Times New Roman', Times, serif; ">Calculator of Zakat</h2><br>
<div class="container">
    <div class="text">
        <div class="h1h2">
            <h4 style="color: #8b4513;font-family: Georgia, 'Times New Roman', Times, serif;">Is Zakat a fundamental obligation of worship (an ‘ibadah)?</h2>
            <div>Yes. It is the Third of the defining Five Pillars of belief and ritual worship 
                that the Prophet, on him be peace, taught us that God built this religion on. Thus,
                 it is every bit the peer of its twin cornerstone upholding Islam, Salah — 
                 which is Islam’s paradigm worship obligation of five-times daily prayer, to which God 
                 conjoined Zakat in His Heavenly Revelation, the Quran. Indeed, the Prophet, on him be peace, 
                 in the famous Gabriel-come-to-teach-you-your religion hadith, or prophetic statement, actually defined Islam itself —
                 “What is Islam?” — by Zakat, along with its four sister Pillars.</div>
        </div>
        <h4 style="color: #8b4513;font-family: Georgia, 'Times New Roman', Times, serif;">Six conditions of a Muslim's wealth determine if he or she must pay Zakat from it:</h3>
        <br>
        <ul id='ul'>
            <li>Absolute Ownership</li>
            <li>Growth</li>
            <li>Minimum Quantity</li>
            <li>Abundance Above Need</li>
            <li>Solvency (Freedom from Debt)</li>
            <li>Lapse of a Lunar Year (or Time of Harvest)</li>
        </ul>
    </div>
    <img src="https://i.pinimg.com/564x/49/1e/02/491e020f943c7a42c0a6056287e1460a.jpg" style="width: 360px; margin-left: 100px;"/> <!-- Adjust width as needed -->
</div>
<button class="button"><a href='/zakat'>Calculate Your Zakat Here</a></button>
@endsection
