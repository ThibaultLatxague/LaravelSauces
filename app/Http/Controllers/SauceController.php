<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sauce;

class SauceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sauces = Sauce::all();
        return view('sauce.afficher', compact('sauces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sauce.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request = $request->validate([
            'name' => 'required',
            'manufacturer' => 'requqired',
            'description' => 'requried',
            '' => '',
            'mainPepper' => 'required',
            'heat' => ['required', 'min:0', 'max:10']
        ]);

        Sauce::create($request);
        return redirect()->route('sauce.index');
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
