<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Postcard;

class GuestController extends Controller
{
    public function home() {

        return view('pages.home');
    }

    public function createPostcard() {

        return view('pages.create-postcard');
    }

    public function storePostcard(Request $request) {

        // validazione dati 
        $data = $request -> validate([

            'sender' => 'required|string',
            'address' => 'required|string',
            'text' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        
        // salvo il nome dell'immagine da storePostcard in una variabile
        $imageFile = $data['image'];
        
        // genero un nome casuale per l'immagine => rand()
        // aggiungo l'estensione originale getClientOriginalExtension()
        $imageName = rand(100000, 999999) . '_' . time()
                    . '.' . $imageFile -> getClientOriginalExtension();
        
        // sposto il nome dell'immagine nella cartella postcards
        $imageFile -> storeAs('/postcards', $imageName, 'public');

        // aggiorno valore image 
        $data['image'] = $imageName;

        // creo la nuova postcard 
        $postcard = Postcard::create($data);

        return redirect() -> route('home');
    }
}
