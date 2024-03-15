<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


$donnees = [
    1 => ['id'=>1,'name' => 'White  quraan ', 'image' => 'https://i.pinimg.com/236x/76/3c/b2/763cb257e4b1561e1a9da9b0334d0661.jpg', 'details' => 'A White Quran is typically a Quranic scripture, the holy book of Islam, bound in a white cover. The content inside remains the same as any other Quran, containing the verses revealed to Prophet Muhammad (peace be upon him) by the angel Gabriel. The white cover often symbolizes purity and clarity, reflecting the sacredness and significance of the text it contains.', 'price'=>'15$'],
    2 => ['id'=>2,'name' => 'Tasbeeh', 'image' => 'https://i.pinimg.com/236x/82/89/f9/8289f93d97462a7f96d4491b13b04bd7.jpg', 'details' => 'A Tasbeeh is a string of beads used in Islamic prayer practices. It helps Muslims keep track of the number of times they recite phrases praising Allah or seeking forgiveness. It s a tool for concentration and spiritual reflection during prayer or meditation.', 'price'=>'5$'],
    3=> ['id'=>3, 'name'=> 'Prayer mat', 'image'=>'https://i.pinimg.com/236x/fc/82/49/fc82497e04875e2ceb8b9613249d3061.jpg', 'details'=>'A prayer mat is a comfortable and portable piece of fabric used by Muslims during their daily prayers. It provides a clean and cozy surface for praying, allowing worshippers to focus on their spiritual connection with Allah.', 'price'=>'25$'],
    4 => ['id'=>4,'name' => 'Hearts abayah', 'image' => 'https://i.pinimg.com/236x/7c/bb/47/7cbb4769229d01d9fe6085629de32f80.jpg', 'details' => 'Description of Product 4 goes here', 'price'=>'50$'],
    5 => ['id'=>5,'name' => 'Colorful abayah', 'image' => 'https://i.pinimg.com/236x/ac/3c/3b/ac3c3bb248218ffa0c4665de74b814ad.jpg', 'details' => 'Description of Product 5 goes here', 'price'=>'60$'],
    6=> ['id'=>6, 'name'=> 'Abayah', 'image'=>'https://i.pinimg.com/474x/af/b2/53/afb253beec447de2f5a126b8234c56c7.jpg', 'details'=>'Description of Product 6 goes here', 'price'=>'25$'],
    7=> ['id'=>7, 'name'=> 'Abayah', 'image'=>'https://i.pinimg.com/236x/94/14/64/9414643cf2ce7829146fe79be77c788d.jpg', 'details'=>'Description of Product 7 goes here', 'price'=>'25$'],
 ];

Route::get('/', function(){
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
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

Route::get('/produit/{id}', function($id) use ($donnees) {
    return view('product-details', ['produit' => $donnees[$id]]);
})->name('product-details');  

Route::post('/saveContact', [ContactController::class, 'saveContact'])->middleware(['Uppercase','InjectParametre','add_new_word']);





