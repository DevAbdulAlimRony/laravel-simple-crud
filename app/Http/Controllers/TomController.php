<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Tom;
use Illuminate\Support\Facades\Hash;

class TomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $toms = Tom::all();
        return View::make('toms.index')->with('toms', $toms);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View::make('toms.create');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
