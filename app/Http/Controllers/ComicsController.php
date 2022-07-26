<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $comics = Comic::all();
       return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validazione dei dati
        $request->validate([
            'id'      => 'required|',
            'title'     => 'required|string|max:50',
            'description'    => 'required|string|max:200',
            'price'   => 'required|string|max:10',
            'series' => 'required|string|max:20',
            'sale_date'     => 'required|date',
            'type'   => 'required|string|max:20',
        ]);

        $formData = $request->all();


        $comics = new Comic();
        $comics->id = $formData['id'];
        $comics->title = $formData['title'];
        $comics->description = $formData['description'];
        $comics->price = $formData['price'];
        $comics->series = $formData['series'];
        $comics->sale_date = $formData['sale_date'];
        $comics->type = $formData['type'];

        $comics->save();

        // TODO: reindirizzare la pagina alla home,
        return redirect()->route('comics.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {

        return view('comics.show', compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // prendiamo la richiesta del form e la inseriamo in una variabile
        $formData = $request->all();
        // modifichiamo l'oggetto con la nuova richiesta
        $comic->update($formData); //(se abbiamo definito $fillable nel model)
        // reindirizziamo la pagina a  mostra dettaggli fumetto(show)
        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
