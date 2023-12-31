<?php

namespace App\Http\Controllers\Admin;

use App\Functions\Helper;
use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Race;
use App\Http\Requests\CharacterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


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
        return view("admin.characters.index", compact("characters"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $races = Race::all();
        return view("admin.characters.create", compact("races"));
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

        $form_data['image_name'] = "";
        $new_character = new Character();


        //lo slag va fatto comunque perche va creato
        $form_data['slug'] = Helper::generateSlug($form_data['name'], Character::class);

        if(array_key_exists('image', $form_data)) {
            $form_data['image_name'] = $request->file('image')->getClientOriginalName();
            $form_data['image'] = Storage::put('uploads', $form_data['image']);
        }

        //si puo fare questo al posto di su se faccio su comic il fillable
        $new_character->fill($form_data);

        $new_character->save();

        return redirect()->route('admin.characters.show', $new_character->id);
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
        return view("admin.characters.show", compact("character"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $races = Race::all();
        $character = Character::find($id);
        return view('admin.characters.edit', compact('character','races'));
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
            $form_data['slug'] = Helper::generateSlug($form_data['name'], Character::class);
        }

        if(array_key_exists('image', $form_data)){
            if($character->image){
                Storage::disk('public')->delete($character->image);
            }
            $form_data['image_name'] = $request->file('image')->getClientOriginalName();
            $form_data['image'] = Storage::put('uploads', $form_data['image']);
        }

        $character->update($form_data);

        return redirect()->route('admin.characters.show', $character->id);
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
        return redirect()->route('admin.characters.index')->with('deleted', "Il personaggio $character->name è stato eliminato correttamente!");
    }
}
