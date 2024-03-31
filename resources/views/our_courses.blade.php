@extends('layout')
@section('content')
<style>
   .container {
    max-width: 80%;
    margin: 0 auto;
    padding: 20px;
    background-color: #f5f5dc;
    margin-top: 10px;
    box-shadow: 2px #555 ;
    border-radius: 40px;
    position: relative; /* Make the container position relative */
}

.title {
    text-align: center;
    color: #333;
}

.link-list {
    text-align: center;
    margin-top: 20px;
    font-family: Georgia, 'Times New Roman', Times, serif;
}

.link-list a {
    text-decoration: none;
    
}
.link-list button:hover {
    transform: scale(1.1); /* Agrandissement lors du survol */
}
.link-list button {
    margin-right: 10px;
    padding: 8px 16px;
    background-color: #8b4513; /* Couleur brune pour les boutons */
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    position: absolute; /* Position the button absolutely */
    top: 10px; /* Adjust top distance */
    right: 10px; /* Adjust right distance */
}

.section {
    margin-top: 30px;
    line-height: 1.6;
}

.section h3 {
    color: #8b4513; /* Couleur brune pour les titres */
}

.section p {
    margin-bottom: 20px;
    font-family: Georgia, 'Times New Roman', Times, serif;
}

.section ol {
    padding-left: 20px;
}

.section li {
    margin-bottom: 10px;
}

img {
    max-width: 50%;
    float: right;
    margin-left: 20px;
}
 button {
    margin-right: 10px;
    padding: 8px 16px;
    background-color: #8b4513; /* Couleur brune pour les boutons */
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
 button:hover {
    background-color: #6e2d08; /* Darker brown on hover */
}
</style>
<div class="container"></br>
    <h1 class="title" style=" color: #8b4513;font-family: Georgia, 'Times New Roman', Times, serif;">Informations before starting our journey!</h1></br>
    <a href="/rules"><button>Tajweed rules</button></a>
    <a href="/namesOfAllah"><button>the 99 names of Allah</button></a>
    <div class="section">
        <img src="https://i.pinimg.com/236x/cd/20/b6/cd20b648bf6a1ec9e3f6ed61177a92ab.jpg" alt="" style="">
    <p><strong>The first thing to remember when talking about Tajweed Rules is that these rules govern the recitation of the Quran. This, it can be a bit confusing at first. However, to clear up any confusion you may have about what Tajweed Rules are and how they can help you in your recitations. Here are some important points to keep in mind about using them in your recitations of Quran, as well as the benefits you will experience from using them consistently. Let’s get started!</strong></p>
    <br>
    <h3>What is Tajweed?</h3>
    <p>The word tajweed means to make something better, improve. Tajweed of the Quran means the knowledge and rules of recitation. Thus, the recitation of the Quran should be like how the Prophet Mohammad (PBUH) recited it.</p>
    <br>
    <h3>The Principles of Tajweed</h3>
    <p>The science of tajweed has several principles that should be understood in order to gain insight into the science. A person seeking to learn science should familiarize himself with the science’s principles.</p>
    <br>
    <h3>DEFINITION</h3>
    <p>Tajweed means betterment which means articulating every letter from its point of articulation and giving it the dues of characteristics. A letter’s rights are its required characteristics that never leave it. A letter’s dues are its presented characteristics that are sometimes present in it and sometimes not.</p>
    <br>
    <h3>PRECEPT</h3>
    <p>Having tajweed knowledge is fardh kifayaah. The Muslim community should know about it. Its application is fardh ‘ain. It is important and should be applied by every Muslim who has memorized at least a single Surah.</p>
    <br>
    <h3>FORMATION</h3>
    <p>Some passages from the Quran and even from certain Hadiths as well.</p>
    <br>
    <h3>BENEFIT</h3>
    <p>During the reading of the Quran, it protects the tongue from mistakes in pronunciation.</p>
    <br>
    <h3>FOUNDER</h3>
    <p>Practically speaking, the rule setter is the Messenger of Allah (PBUH), since the Quran was revealed to him by Allah, with tajweed (perfection). Prophet Muhammad (PBUH) received it from Jibreel, the Trustworthy, and taught it to his companions. They taught it to their followers, and so on until it comes to us through these chains. However, scholars of the Quran sciences are the decision makers from a scientific perspective. One of those scholars includes Abu ‘Ubaid Al-Qasim bin Sallaam.</p>
    <br>
    <h3>Fundamental Factors</h3>
    <p>Both Arabic and non-Arabic Muslims are meant to benefit from the Tajweed Rules of the Quran. It directs us toward perfect recitation of the Holy Quran. We may quickly pick up these rules and use them to improve our reading.</p>

    <p>However, they are not particularly challenging; all they require is some practice under the guidance of a skilled instructor. The Holy Quran was revealed to Mohammed (PBUH), Allah’s messenger, by the angel Gabriel, as is totally obvious. Most of the time, those rules were set by our beloved prophet Mohammed(PBUH) to help in Quran reciting.</p>

    <p>While reading, it protects the tongue against mispronunciations of the Holy Quran. Muslims should get familiar with the Tajweed Rules of the Quran. They should understand them well and repeatedly apply these rules while reciting. There are four fundamental factors that are as follows:</p>
    <br>
    <ol>
        <li>Tongue exercises and a lot of repetition</li>
        <li>The properties of the individual letters.</li>
        <li>The letter s pronunciation points.</li>
        <li>The order of the letters causes rules to change.</li>
    </ol>
    <br>
    <h3>Common Tajweed Mistakes</h3>
    <p>In terms of tajweed, non-Arabs tend to mistake the timing of the vowels and the madd letters. At first, one might imagine that the letters in Arabic that are not found in other languages would prove problematic
</div>
</div>


@endsection
