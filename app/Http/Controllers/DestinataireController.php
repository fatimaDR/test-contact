<?php

namespace App\Http\Controllers;

use App\Models\Destinataire;
use App\Http\Requests\StoreDestinataireRequest;
use App\Http\Requests\UpdateDestinataireRequest;

class DestinataireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDestinataireRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDestinataireRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destinataire  $destinataire
     * @return \Illuminate\Http\Response
     */
    public function show(Destinataire $destinataire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destinataire  $destinataire
     * @return \Illuminate\Http\Response
     */
    public function edit(Destinataire $destinataire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDestinataireRequest  $request
     * @param  \App\Models\Destinataire  $destinataire
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDestinataireRequest $request, Destinataire $destinataire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destinataire  $destinataire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destinataire $destinataire)
    {
        //
    }
}
