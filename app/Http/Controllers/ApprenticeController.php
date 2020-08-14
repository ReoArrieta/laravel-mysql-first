<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Apprentice;

class ApprenticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apprentice = Apprentice::get();
        return view('apprenticeIndex', ['apprentices' => $apprentice]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Apprentice::insert(
            [
                'nombre' => $request->nombre,
                'identificacion' => $request->identificacion,
                'ficha' => $request->ficha,
                'fecha_nacimiento' => $request->fecha_nacimiento
            ]
        );
        return redirect("apprentices");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apprentice = Apprentice::find($id);
        return view('apprenticeShow', ['apprentice' => $apprentice]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apprentice = Apprentice::find($id);
        return view('apprenticeEdit', ['apprentice' => $apprentice]);
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
        Apprentice::where('id', $id)->update(
            [
                'nombre' => $request->nombre,
                'identificacion' => $request->identificacion,
                'ficha' => $request->ficha,
                'fecha_nacimiento' => $request->fecha_nacimiento
            ]
        );
        return redirect("apprentices");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Apprentice::where('id', $id)->delete();
        return redirect("apprentices");
    }
}
