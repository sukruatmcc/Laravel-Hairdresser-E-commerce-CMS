<?php

namespace App\Http\Controllers;

use App\Models\Sepet;
use App\Http\Requests\StoreSepetRequest;
use App\Http\Requests\UpdateSepetRequest;

class SepetController extends Controller
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
     * @param  \App\Http\Requests\StoreSepetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSepetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sepet  $sepet
     * @return \Illuminate\Http\Response
     */
    public function show(Sepet $sepet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sepet  $sepet
     * @return \Illuminate\Http\Response
     */
    public function edit(Sepet $sepet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSepetRequest  $request
     * @param  \App\Models\Sepet  $sepet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSepetRequest $request, Sepet $sepet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sepet  $sepet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sepet $sepet)
    {
        //
    }
}
