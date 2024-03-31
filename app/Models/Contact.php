<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    /* seules les clés nom, prenom, tel, email et date_naiss
 du tableau contacts seront prises en compte. Cela signifie 
 que d'autres clés dans le tableau, s'il y en a,
 seront ignorées lors de la création de l'enregistrement */
    protected $fillable = [
        'nom', 'prenom', 'tel', 'email', 'password','date_naiss',
    ];


    /* Dans cet exemple, le modèle User a la propriété $hidden définie avec 
'password'. Cela signifie que lorsqu'un objet User est converti en JSON (par exemple, 
lorsqu'il est retourné par une API), 
l'attribut password ne sera pas inclus dans le résultat JSON.*/
  //  protected $hidden = [
   //     'password',
   // ];
}
