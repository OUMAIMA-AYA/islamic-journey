@extends('layout')
@section('content')
<style>
       .rule-container {
        width: 70%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-left: 15%;
        margin-top: 30px;
    }
    .rule-column {
        width: calc(33.33% - 20px);
        margin-bottom: 20px;
    }
    .rule-card {
        background-color: #f5f5dc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
        transition: transform 0.3s ease;
    }
    .rule-card:hover {
        transform: translateY(-5px);
    }
    .rule-card img {
        width: 50%; 
        border-radius: 5px;
        margin-bottom: 10px;
    }
    
    .rule-card strong {
        color: #8b4513;
    }
    .rule-card p {
        font-style: italic;
    }
</style>
<div>
<h1 style="text-align: center; color: #8b4513; margin: 15px; text-decoration: underline;">Rules of tajweed</h1>
</div>
<div class="rule-container">
    
    <div class="rule-column">
        <div class="rule-card">
            <img src="">
            <h3 style="text-align: center;">Ghunnah</h3>
            <p><strong>Rule 1:</strong>  Ghunnah In Tajweed: is a sound produced entirely from the nose (nasal passage). It is almost a sound like a hmm. This sound has average duration of 2 counts. If you find
             a Shaddah sign above the noon (نون) or Meem (ميم) you have to sound a Ghunnah.</p>
        </div>
        <div class="rule-card">
            <img src="" >
            <h3 style="text-align: center;">The letters of Izhar </h3>
            <p><strong>Rule 2:</strong>  The letters of this type of Izhar are limited to hamz, haa, ain, ghin,
             haa and khaa and they are the letters that must be shown. In pronunciation when they come after the Sakinah Noun or Tanween, 
            and they are called by this name because they depend on the throat for pronunciation..</p>
        </div>
        <div class="rule-card">
            <img src="" >
            <h3 style="text-align: center;">Iqlab</h3>
            <p><strong>Rule 3:</strong>  Iqlab is a rule of Tajweed in Quranic recitation that occurs when a Tanween 
            or Noon Sakinah is followed by the letter Baa. In such cases, the Tanween or Noon Sakinah is replaced by a Meem sound, which is pronounced with a nasal sound. 
            This nasalization of the Meem is called Iqlab..</p>
        </div>
    </div>
    <div class="rule-column">
        <div class="rule-card">
            <img src="" >
            <h3 style="text-align: center;">Ikhfaa</h3>
            <p><strong>Rule 4:</strong> If any of the fifteen Arabic 
            letters of Ikhfaa are preceded by Annoon Assakinah or Attanween, then Annoon Assakinah and Attanween should be hidden when they are pronounced with making 
            the sound of ghunnah for approximately two beats of seconds.</p>
        </div>
        <div class="rule-card">
            <img src="">
            <h3 style="text-align: center;">Idgham without Ghunnah</h3>
            <p><strong>Rule 5:</strong> Idgham without Ghunnah is the nasal sound that is assimilated into a non-nasal
             sound without prolonging the nasal sound. This type of idgham is marked with a small vertical line above the non-nasal letter. There are two letters of the six Idgham letters that are without Ghunnah,
             they are Laam (ل and Raa (ر)..</p>
        </div>
        <div class="rule-card">
            <img src="">
            <h3 style="text-align: center;">heavy and light</h3>
            <p><strong>Rule 6:</strong> As we all know that there are two types of letters in the Arabic alphabet: 
            heavy and light. The heaviness or lightness of a letter is determined by the amount of air that is exhaled 
            when pronouncing it. Heavy letters are pronounced with a full mouth, 
            while light letters are pronounced with a less open mouth..</p>
        </div>
    </div>
    <div class="rule-column">
        <div class="rule-card">
            <img src="" >
            <h3 style="text-align: center;">the idgham </h3>
            <p><strong>Rule 7:</strong> TheIdgham rules is if after Nun As-Sakinah or Tanween comes any of the Idghaam 
            letters, you will merge the nun Sakinah or Tanween into the letter. The emphasis will be on the succeeding letter 
            because of the presence of Shaddah..</p>
        </div>
        <div class="rule-card">
            <img src="" >
            <h3 style="text-align: center;">The idgham with ghunnah</h3>
            <p><strong>Rule 8:</strong> Idghaam with ghunnah, or Idghaam bi ghunna in Arabic, happens when any Tanween
             or Noon Saakinah is followed by any of these letters waaw, meem, noon, yaa (ي، ن، م، و). Remember that a ghunnah is a nasalized sound that falls between
             a hum and a moan. Probably like an engine sound..</p>
        </div>
    </div>
</div>

@endsection
