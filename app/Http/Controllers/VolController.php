<?php

namespace App\Http\Controllers;

use App\Models\Vols;
use Illuminate\Http\Request;


class VolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vols = Vols::all();

        return view('index', compact('vols'));
        //
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      

        
        return view('create');

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(Request $request)
    {
        
    $validatedData = $request->validate([
        'code'=>'required',
        'date_depart' =>'required',
        'heure-depart'  =>'',
        'nombre_classe_A'  =>'required',
        'nombre_classe_B'  =>'required',
        'prix_classe_A'  =>'required',
        'prix_classe_B'  =>'required',

    ]);
       

       
   $Vols = Vols::create($validatedData);
   


    return redirect('/vols')->with('success', 'Vol créer avec succèss');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vol = Vols::findOrFail($id);

        return view('edit', compact('vol'));
        //
    }

    public function voir($id)
    {
        $vol = Vols::findOrFail($id);

        return view('e', compact('vol'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'code' =>'required',
        'date_depart' =>'required',
        'heure-depart'  =>'',
        'nombre_classe_A'  =>'required|max:5000',
        'nombre_classe_B'  =>'required',
        'prix_classe_A'  =>'required',
        'prix_classe_B'  =>'required',

    ]);

    Vols::whereId($id)->update($validatedData);

    return redirect('/vols')->with('success', 'Vol mise à jour avec succèss');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
public function destroy($id)
{
    $vol = Vols::findOrFail($id);
    $vol->delete();

    return redirect('/vols')->with('success', 'Vol supprimer avec succèss');
}
}
