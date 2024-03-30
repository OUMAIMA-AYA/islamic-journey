<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
 
$names = [
    1 => ['id' => 1, 'name' => 'ٱلْرَّحْمَـانُ', 'transliteration' => 'AR-RAHMAAN', 'meaning' => 'The Most or Entirely Merciful'],
    2 => ['id' => 2, 'name' => 'ٱلْرَّحِيْمُ', 'transliteration' => 'AR-RAHEEM', 'meaning' => 'The Bestower of Mercy'],
    3 => ['id' => 3, 'name' => 'ٱلْمَلِكُ', 'transliteration' => 'AL-MALIK', 'meaning' => 'The King and Owner of Dominion'],
    4 => ['id' => 4, 'name' => 'ٱلْقُدُّوسُ', 'transliteration' => 'AL-QUDDUS', 'meaning' => 'The Absolutely Pure'],
    5 => ['id' => 5, 'name' => 'ٱلْسَّلَامُ', 'transliteration' => 'AS-SALAM', 'meaning' => 'The Perfection and Giver of Peace'],
    6 => ['id' => 6, 'name' => 'ٱلْمُؤْمِنُ', 'transliteration' => 'AL-MU’MIN', 'meaning' => 'The One Who gives Emaan and Security'],
    7 => ['id' => 7, 'name' => 'ٱلْمُهَيْمِنُ', 'transliteration' => 'AL-MUHAYMIN', 'meaning' => 'The Guardian, The Witness, The Overseer'],
    8 => ['id' => 8, 'name' => 'ٱلْعَزِيزُ', 'transliteration' => 'AL-AZEEZ', 'meaning' => 'The All Mighty'],
    9 => ['id' => 9, 'name' => 'ٱلْجَبَّارُ', 'transliteration' => 'AL-JABBAR', 'meaning' => 'The Compeller, The Restorer'],
    10 => ['id' => 10, 'name' => 'ٱلْمُتَكَبِّرُ', 'transliteration' => 'AL-MUTAKABBIR', 'meaning' => 'The Supreme, The Majestic'],
    11 => ['id' => 11, 'name' => 'ٱلْخَالِقُ', 'transliteration' => 'AL-KHAALIQ', 'meaning' => 'The Creator, The Maker'],
    12 => ['id' => 12, 'name' => 'ٱلْبَارِئُ', 'transliteration' => 'AL-BAARI’', 'meaning' => 'The Originator'],
    13 => ['id' => 13, 'name' => 'ٱلْمُصَوِّرُ', 'transliteration' => 'AL-MUSAWWIR', 'meaning' => 'The Fashioner'],
    14 => ['id' => 14, 'name' => 'ٱلْغَفَّارُ', 'transliteration' => 'AL-GHAFFAR', 'meaning' => 'The All- and Oft-Forgiving'],
    15 => ['id' => 15, 'name' => 'ٱلْقَهَّارُ', 'transliteration' => 'AL-QAHHAR', 'meaning' => 'The Subduer, The Ever-Dominating'],
    16 => ['id' => 16, 'name' => 'ٱلْوَهَّابُ', 'transliteration' => 'AL-WAHHAAB', 'meaning' => 'The Giver of Gifts'],
    17 => ['id' => 17, 'name' => 'ٱلْرَّزَّاقُ', 'transliteration' => 'AR-RAZZAAQ', 'meaning' => 'The Provider'],
    18 => ['id' => 18, 'name' => 'ٱلْفَتَّاحُ', 'transliteration' => 'AL-FATTAAH', 'meaning' => 'The Opener, The Judge'],
    19 => ['id' => 19, 'name' => 'ٱلْعَلِيمُ', 'transliteration' => 'AL-‘ALEEM', 'meaning' => 'The All-Knowing, The Omniscient'],
    20 => ['id' => 20, 'name' => 'ٱلْقَابِضُ', 'transliteration' => 'AL-QAABID', 'meaning' => 'The'],
    21 => ['id' => 21, 'name' => 'ٱلْبَاسِطُ', 'transliteration' => 'AL-BAASIT', 'meaning' => 'The Extender'],
    22 => ['id' => 22, 'name' => 'ٱلْخَافِضُ', 'transliteration' => 'AL-KHAAFIDH', 'meaning' => 'The Reducer, The Abaser'],
    23 => ['id' => 23, 'name' => 'ٱلْرَّافِعُ', 'transliteration' => 'AR-RAAFI’', 'meaning' => 'The Exalter, The Elevator'],
    24 => ['id' => 24, 'name' => 'ٱلْمُعِزُّ', 'transliteration' => 'AL-MU’IZZ', 'meaning' => 'The Honourer, The Bestower'],
    25 => ['id' => 25, 'name' => 'ٱلْمُذِلُّ', 'transliteration' => 'AL-MUZIL', 'meaning' => 'The Dishonourer, The Humiliator'],
    26 => ['id' => 26, 'name' => 'ٱلْسَّمِيعُ', 'transliteration' => 'AS-SAMEE’', 'meaning' => 'The All-Hearing'],
    27 => ['id' => 27, 'name' => 'ٱلْبَصِيرُ', 'transliteration' => 'AL-BASEER', 'meaning' => 'The All-Seeing'],
    28 => ['id' => 28, 'name' => 'ٱلْحَكَمُ', 'transliteration' => 'AL-HAKAM', 'meaning' => 'The Judge, The Giver of Justice'],
    29 => ['id' => 29, 'name' => 'ٱلْعَدْلُ', 'transliteration' => 'AL-‘ADL', 'meaning' => 'The Utterly Just'],
    30 => ['id' => 30, 'name' => 'ٱلْلَّطِيفُ', 'transliteration' => 'AL-LATEEF', 'meaning' => 'The Subtle One, The Most Gentle'],
    31 => ['id' => 31, 'name' => 'ٱلْخَبِيرُ', 'transliteration' => 'AL-KHABEER', 'meaning' => 'The Acquainted, the All-Aware'],
    32 => ['id' => 32, 'name' => 'ٱلْحَلِيمُ', 'transliteration' => 'AL-HALEEM', 'meaning' => 'The Most Forbearing'],
    33 => ['id' => 33, 'name' => 'ٱلْعَظِيمُ', 'transliteration' => 'AL-‘ATHEEM', 'meaning' => 'The Magnificent, The Supreme'],
    34 => ['id' => 34, 'name' => 'ٱلْغَفُورُ', 'transliteration' => 'AL-GHAFOOR', 'meaning' => 'The Forgiving, The Exceedingly Forgiving'],
    35 => ['id' => 35, 'name' => 'ٱلْشَّكُورُ', 'transliteration' => 'ASH-SHAKOOR', 'meaning' => 'The Most Appreciative'],
    36 => ['id' => 36, 'name' => 'ٱلْعَلِيُّ', 'transliteration' => 'AL-‘ALEE', 'meaning' => 'The Most High, The Exalted'],
    37 => ['id' => 37, 'name' => 'ٱلْكَبِيرُ', 'transliteration' => 'AL-KABEER', 'meaning' => 'The Greatest, The Most Grand'],
    38 => ['id' => 38, 'name' => 'ٱلْحَفِيظُ', 'transliteration' => 'AL-HAFEEDH', 'meaning' => 'The Preserver, The All-Heedful and All-Protecting'],
    39 => ['id' => 39, 'name' => 'ٱلْمُقِيتُ', 'transliteration' => 'AL-MUQEET', 'meaning' => 'The Sustainer'],
    40 => ['id' => 40, 'name' => 'ٱلْحَسِيبُ', 'transliteration' => 'AL-HASEEB', 'meaning' => 'The Reckoner, The Sufficient'],
    41 => ['id' => 41, 'name' => 'ٱلْجَلِيلُ', 'transliteration' => 'AL-JALEEL', 'meaning' => 'The Majestic'],
    42 => ['id' => 42, 'name' => 'ٱلْكَرِيمُ', 'transliteration' => 'AL-KAREEM', 'meaning' => 'The Most Generous, The Most Esteemed'],
    43 => ['id' => 43, 'name' => 'ٱلْرَّقِيبُ', 'transliteration' => 'AR-RAQEEB', 'meaning' => 'The Watchful'],
    44 => ['id' => 44, 'name' => 'ٱلْمُجِيبُ', 'transliteration' => 'AL-MUJEEB', 'meaning' => 'The Responsive One'],
    45 => ['id' => 45, 'name' => 'ٱلْوَاسِعُ', 'transliteration' => 'AL-WAASI’', 'meaning' => 'The All-Encompassing, the Boundless'],
    46 => ['id' => 46, 'name' => 'ٱلْحَكِيمُ', 'transliteration' => 'AL-HAKEEM', 'meaning' => 'The All-Wise'],
    47 => ['id' => 47, 'name' => 'ٱلْوَدُودُ', 'transliteration' => 'AL-WADOOD', 'meaning' => 'The Most Loving'],
    48 => ['id' => 48, 'name' => 'ٱلْمَجِيدُ', 'transliteration' => 'AL-MAJEED', 'meaning' => 'The Glorious, The Most Honorable'],
    49 => ['id' => 49, 'name' => 'ٱلْبَاعِثُ', 'transliteration' => 'AL-BA’ITH', 'meaning' => 'The Resurrector, The Raiser of the Dead'],
    50 => ['id' => 50, 'name' => 'ٱلْشَّهِيدُ', 'transliteration' => 'ASH-SHAHEED', 'meaning' => 'The All- and Ever Witnessing'],
    51 => ['id' => 51, 'name' => 'ٱلْحَقُّ', 'transliteration' => 'AL-HAQQ', 'meaning' => 'The Absolute Truth'],
    52 => ['id' => 52, 'name' => 'ٱلْوَكِيلُ', 'transliteration' => 'AL-WAKEEL', 'meaning' => 'The Trustee, The Disposer of Affairs'],
    53 => ['id' => 53, 'name' => 'ٱلْقَوِيُّ', 'transliteration' => 'AL-QAWIYY', 'meaning' => 'The All-Strong'],
    54 => ['id' => 54, 'name' => 'ٱلْمَتِينُ', 'transliteration' => 'AL-MATEEN', 'meaning' => 'The Firm, The Steadfast'],
    55 => ['id' => 55, 'name' => 'ٱلْوَلِيُّ', 'transliteration' => 'AL-WALIYY', 'meaning' => 'The Protecting Associate'],
    56 => ['id' => 56, 'name' => 'ٱلْحَمِيدُ', 'transliteration' => 'AL-HAMEED', 'meaning' => 'The Praiseworthy'],
    57 => ['id' => 57, 'name' => 'ٱلْمُحْصِيُ', 'transliteration' => 'AL-MUHSEE', 'meaning' => 'The All-Enumerating, The Counter'],
    58 => ['id' => 58, 'name' => 'ٱلْمُبْدِئُ', 'transliteration' => 'AL-MUBDI', 'meaning' => 'The Originator, The Initiator'],
    59 => ['id' => 59, 'name' => 'ٱلْمُعِيدُ', 'transliteration' => 'AL-MU’ID', 'meaning' => 'The Restorer, The Reinstater'],
    60 => ['id' => 60, 'name' => 'ٱلْمُحْيِى', 'transliteration' => 'AL-MUHYEE', 'meaning' => 'The Giver of Life'],
    61 => ['id' => 61, 'name' => 'ٱلْمُمِيتُ', 'transliteration' => 'AL-MUMEET', 'meaning' => 'The Bringer of Death, the Destroyer'],
    62 => ['id' => 62, 'name' => 'ٱلْحَىُّ', 'transliteration' => 'AL-HAYY', 'meaning' => 'The Ever-Living'],
    63 => ['id' => 63, 'name' => 'ٱلْقَيُّومُ', 'transliteration' => 'AL-QAYYOOM', 'meaning' => 'The Sustainer, The Self-Subsisting'],
    64 => ['id' => 64, 'name' => 'ٱلْوَاجِدُ', 'transliteration' => 'AL-WAAJID', 'meaning' => 'The Perceiver'],
    65 => ['id' => 65, 'name' => 'ٱلْمَاجِدُ', 'transliteration' => 'AL-MAAJID', 'meaning' => 'The Illustrious, the Magnificent'],
    66 => ['id' => 66, 'name' => 'ٱلْوَاحِدُ', 'transliteration' => 'AL-WAAHID', 'meaning' => 'The One'],
    67 => ['id' => 67, 'name' => 'ٱلْأَحَدُ', 'transliteration' => 'AL-AHAD', 'meaning' => 'The Unique, The Only One'],
    68 => ['id' => 68, 'name' => 'ٱلْصَّمَدُ', 'transliteration' => 'AS-SAMAD', 'meaning' => 'The Eternal, Satisfier of Needs'],
    69 => ['id' => 69, 'name' => 'ٱلْقَادِرُ', 'transliteration' => 'AL-QADIR', 'meaning' => 'The Capable, The Powerful'],
    70 => ['id' => 70, 'name' => 'ٱلْمُقْتَدِرُ', 'transliteration' => 'AL-MUQTADIR', 'meaning' => 'The Omnipotent'],
    70 => ['id' => 70, 'name' => 'ٱلْمُقْتَدِرُ', 'transliteration' => 'AL-MUQTADIR', 'meaning' => 'The Omnipotent'],
    71 => ['id' => 71, 'name' => 'ٱلْمُقَدِّمُ', 'transliteration' => 'AL-MUQADDIM', 'meaning' => 'The Expediter, The Promoter'],
    72 => ['id' => 72, 'name' => 'ٱلْمُؤَخِّرُ', 'transliteration' => 'AL-MU’AKHKHIR', 'meaning' => 'The Delayer, the Retarder'],
    73 => ['id' => 73, 'name' => 'ٱلأَوَّلُ', 'transliteration' => 'AL-AWWAL', 'meaning' => 'The First'],
    74 => ['id' => 74, 'name' => 'ٱلْآخِرُ', 'transliteration' => 'AL-AAKHIR', 'meaning' => 'The Last'],
    75 => ['id' => 75, 'name' => 'ٱلْظَّاهِرُ', 'transliteration' => 'AZ-DHAAHIR', 'meaning' => 'The Manifest'],
    76 => ['id' => 76, 'name' => 'ٱلْبَاطِنُ', 'transliteration' => 'AL-BAATIN', 'meaning' => 'The Hidden One, Knower of the Hidden'],
    77 => ['id' => 77, 'name' => 'ٱلْوَالِي', 'transliteration' => 'AL-WAALI', 'meaning' => 'The Governor, The Patron'],
    78 => ['id' => 78, 'name' => 'ٱلْمُتَعَالِي', 'transliteration' => 'AL-MUTA’ALI', 'meaning' => 'The Self Exalted'],
    79 => ['id' => 79, 'name' => 'ٱلْبَرُّ', 'transliteration' => 'AL-BARR', 'meaning' => 'The Source of Goodness, the Kind Benefactor'],
    80 => ['id' => 80, 'name' => 'ٱلْتَّوَّابُ', 'transliteration' => 'AT-TAWWAB', 'meaning' => 'The Ever-Pardoning, The Relenting'],
    81 => ['id' => 81, 'name' => 'ٱلْمُنْتَقِمُ', 'transliteration' => 'AL-MUNTAQIM', 'meaning' => 'The Avenger'],
    82 => ['id' => 82, 'name' => 'ٱلْعَفُوُّ', 'transliteration' => 'AL-‘AFUWW', 'meaning' => 'The Pardoner'],
    83 => ['id' => 83, 'name' => 'ٱلْرَّؤُفُ', 'transliteration' => 'AR-RA’OOF', 'meaning' => 'The Most Kind'],
    84 => ['id' => 84, 'name' => 'مَالِكُ ٱلْمُلْكُ', 'transliteration' => 'MAALIK-UL-MULK', 'meaning' => 'Master of the Kingdom, Owner of the Dominion'],
    85 => ['id' => 85, 'name' => 'ذُو ٱلْجَلَالِ وَٱلْإِكْرَامُ', 'transliteration' => 'DHUL-JALAALI WAL-IKRAAM', 'meaning' => 'Possessor of Glory and Honour, Lord of Majesty and Generosity'],
    86 => ['id' => 86, 'name' => 'ٱلْمُقْسِطُ', 'transliteration' => 'AL-MUQSIT', 'meaning' => 'The Equitable, the Requiter'],
    87 => ['id' => 87, 'name' => 'ٱلْجَامِعُ', 'transliteration' => 'AL-JAAMI’', 'meaning' => 'The Gatherer, the Uniter'],
    88 => ['id' => 88, 'name' => 'ٱلْغَنِيُّ', 'transliteration' => 'AL-GHANIYY', 'meaning' => 'The Self-Sufficient, The Wealthy'],
    89 => ['id' => 89, 'name' => 'ٱلْمُغْنِيُّ', 'transliteration' => 'AL-MUGHNI', 'meaning' => 'The Enricher'],
    90 => ['id' => 90, 'name' => 'ٱلْمَانِعُ', 'transliteration' => 'AL-MANI’', 'meaning' => 'The Withholder'],
    91 => ['id' => 91, 'name' => 'ٱلْضَّارُ', 'transliteration' => 'AD-DHARR', 'meaning' => 'The Distresser'],
    92 => ['id' => 92, 'name' => 'ٱلْنَّافِعُ', 'transliteration' => 'AN-NAFI’', 'meaning' => 'The Propitious, the Benefactor'],
    93 => ['id' => 93, 'name' => 'ٱلْنُّورُ', 'transliteration' => 'AN-NUR', 'meaning' => 'The Light, The Illuminator'],
    94 => ['id' => 94, 'name' => 'ٱلْهَادِي', 'transliteration' => 'AL-HAADI', 'meaning' => 'The Guide'],
    95 => ['id' => 95, 'name' => 'ٱلْبَدِيعُ', 'transliteration' => 'AL-BADEE’', 'meaning' => 'The Incomparable Originator'],
    96 => ['id' => 96, 'name' => 'ٱلْبَاقِي', 'transliteration' => 'AL-BAAQI', 'meaning' => 'The Ever-Surviving, The Everlasting'],
    97 => ['id' => 97, 'name' => 'ٱلْوَارِثُ', 'transliteration' => 'AL-WAARITH', 'meaning' => 'The Inheritor, The Heir'],
    98=>['id' => 98, 'name' => 'ٱلْرَّشِيدُ', 'transliteration' => 'AR-RASHEED', 'meaning' => 'The Guide, Infallible Teacher'],
    99=>['id' => 99, 'name' => 'ٱلْصَّبُورُ', 'transliteration' => 'AS-SABOOR', 'meaning' => 'The Forbearing, The Patient']
];

$donnees = [
    1 => ['id'=>1,'name' => 'White  quraan ', 'image' => 'https://i.pinimg.com/236x/76/3c/b2/763cb257e4b1561e1a9da9b0334d0661.jpg', 'details' => 'A White Quran is typically a Quranic scripture, the holy book of Islam, bound in a white cover. The content inside remains the same as any other Quran, containing the verses revealed to Prophet Muhammad (peace be upon him) by the angel Gabriel. The white cover often symbolizes purity and clarity, reflecting the sacredness and significance of the text it contains.', 'price'=>'15$'],
    2 => ['id'=>2,'name' => 'Tasbeeh', 'image' => 'https://i.pinimg.com/236x/82/89/f9/8289f93d97462a7f96d4491b13b04bd7.jpg', 'details' => 'A Tasbeeh is a string of beads used in Islamic prayer practices. It helps Muslims keep track of the number of times they recite phrases praising Allah or seeking forgiveness. It s a tool for concentration and spiritual reflection during prayer or meditation.', 'price'=>'5$'],
    3=> ['id'=>3, 'name'=> 'Prayer mat', 'image'=>'https://i.pinimg.com/236x/fc/82/49/fc82497e04875e2ceb8b9613249d3061.jpg', 'details'=>'A prayer mat is a comfortable and portable piece of fabric used by Muslims during their daily prayers. It provides a clean and cozy surface for praying, allowing worshippers to focus on their spiritual connection with Allah.', 'price'=>'25$'],
    4 => ['id'=>4,'name' => 'Hearts abayah', 'image' => 'https://i.pinimg.com/236x/7c/bb/47/7cbb4769229d01d9fe6085629de32f80.jpg', 'details' => 'Description of Product 4 goes here', 'price'=>'50$'],
    5 => ['id'=>5,'name' => 'Colorful abayah', 'image' => 'https://i.pinimg.com/236x/ac/3c/3b/ac3c3bb248218ffa0c4665de74b814ad.jpg', 'details' => 'Description of Product 5 goes here', 'price'=>'60$'],
    6=> ['id'=>6, 'name'=> 'Abayah', 'image'=>'https://i.pinimg.com/474x/af/b2/53/afb253beec447de2f5a126b8234c56c7.jpg', 'details'=>'Description of Product 6 goes here', 'price'=>'25$'],
    7=> ['id'=>7, 'name'=> 'Abayah', 'image'=>'https://i.pinimg.com/236x/94/14/64/9414643cf2ce7829146fe79be77c788d.jpg', 'details'=>'Description of Product 7 goes here', 'price'=>'25$'],
 ];
Route::get('/home', function(){
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});
Route::post('/saveContact', [ContactController::class, 'saveContact'])->name('contacts.saveContact');

use App\Models\Contact;
Route::get('/users',function(){
    $contact = Contact::all();
   // $contact  = Contact::where('email','like','%@gmail.%')->get();
   //$contact  = Contact::find(1)->get(); only for id 
   // dd($contact);
    return view('users', ['list'=> $contact]);
});


Route::get('/produit', function() use($donnees) {
    return view('produit', ['data' => $donnees]);
})->name('produit'); 

Route::get('/our_courses ', function() {
    return view('our_courses');
});

Route::get('/rules ', function() {
    return view('rules');
});

Route::get('/namesOfAllah',function() use($names){
    return view('namesOfAllah',['namesOfAllah'=>$names]);
});

Route::get('/produit/{id}', function($id) use ($donnees) {
    return view('product-details', ['produit' => $donnees[$id]]);
})->name('product-details');  


use App\Http\Controllers\ZakatController;

Route::get('/zakat',function(){
    return view('zakat');
});
Route::post('/zakat', [ZakatController::class, 'calculate']);



