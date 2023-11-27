<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Http\Requests\CharacterRequest;


class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters= Character::orderBy('id')->paginate(9);
        if (empty($characters)) {
            abort(404);
        }
        return view("characters.index", compact("characters"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("characters.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CharacterRequest $request)
    {

        $form_data = $request->all();

        $new_character = new Character();

        //lo slag va fatto comunque perche va creato
        $form_data['slug'] = Character::generateSlug($form_data['name']);

        //si puo fare questo al posto di su se faccio su comic il fillable
        $new_character->fill($form_data);

        $new_character->save();

        return redirect()->route('characters.show', $new_character->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = Character::find($id);
        return view("characters.show", compact("character"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $character = Character::find($id);
        return view('characters.edit', compact('character'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CharacterRequest $request, Character $character)
    {
        $form_data = $request->all();

        if($character->name == $form_data['name']){
            $form_data['slug'] = $character->slug;
        }
        else{
            $form_data['slug'] = Character::generateSlug($form_data['name']);
        }

        $character->update($form_data);

        return redirect()->route('characters.show', $character->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()->route('characters.index')->with('deleted', "Il personaggio $character->name è stato eliminato correttamente!");
    }
}
