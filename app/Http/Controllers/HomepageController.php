<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HomepageRequest;
use App\Models\contact;

class HomepageController extends Controller
{
    public function homepage(){
        return view(
            'form'
        );
    }
    //
    public function create(){
        return view('create');
    }

    public function homepage_store(HomepageRequest $request){

        $path_image = '';
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $path_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images/cover', $path_name);
        }

        contact::create([
            'name' => $request-> name,
            'email' => $request-> email,
            'oggetto'=>$request-> oggetto,
            'assistenza'=>$request-> assistenza,
            'image'=>$path_image
        ]);

        return redirect()->route('homepage')->with('success', 'Creazione avvenuta con successo!');
    }
    //
}
