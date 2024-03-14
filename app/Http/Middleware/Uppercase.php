<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Uppercase
{
  public function handle($request, Closure $next)
  {
    //  $request->merge(array_map('strtoupper', $request->all()));

    $request->merge([

      'nom' => strtoupper($request->input('nom')),
      'prenom' => strtoupper($request->input('prenom')),
      'email' => strtoupper($request->input('email')),
      'genre' => strtoupper($request->input('genre')),


    ]);

    return $next($request);

          /* Cette ligne prend toutes les données de la requête, 
      les transforme en majuscules à l'aide de la fonction strtoupper,
        et fusionne les données modifiées avec les données de la requête d'origine. */
          /* Cette ligne appelle le prochain middleware dans la chaîne
      en lui passant la requête modifiée. Cela permet au flux de
      traitement de la requête de se poursuivre après l'exécution de ce middleware.*/
  }
}
