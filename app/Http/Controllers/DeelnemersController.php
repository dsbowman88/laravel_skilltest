<?php

namespace App\Http\Controllers;

use App\Deelnemers;
use Illuminate\Http\Request;

class DeelnemersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('deelnemers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deelnemers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Deelnemers::create(request()->validate([
            'naam' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'min:5'],
            'route' => 'required'
            ]));
        return redirect('/deelnemers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deelnemers  $deelnemers
     * @return \Illuminate\Http\Response
     */
    public function show(Deelnemers $deelnemers)
    {
        return view('deelnemers.show', compact('deelnemers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deelnemers  $deelnemers
     * @return \Illuminate\Http\Response
     */
    public function edit(Deelnemers $deelnemers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deelnemers  $deelnemers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deelnemers $deelnemers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deelnemers  $deelnemers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deelnemers $deelnemers)
    {
        //
    }
}
