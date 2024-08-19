<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Razza;
use Illuminate\Http\Request;

class RazzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $razzaList = Razza::all();
        return view('admin.razze.index', compact('razzaList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Razza $razza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Razza $razza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Razza $razza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Razza $razza)
    {
        //
    }
}