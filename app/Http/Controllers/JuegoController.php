<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use App\Http\Requests\JuegoRequest;

/**
 * Class JuegoController
 * @package App\Http\Controllers
 */
class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $juegos = Juego::paginate();

        return view('juego.index', compact('juegos'))
            ->with('i', (request()->input('page', 1) - 1) * $juegos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $juego = new Juego();
        return view('juego.create', compact('juego'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JuegoRequest $request)
    {
        Juego::create($request->validated());

        return redirect()->route('juegos.index')
            ->with('success', 'Juego created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $juego = Juego::find($id);

        return view('juego.show', compact('juego'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $juego = Juego::find($id);

        return view('juego.edit', compact('juego'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JuegoRequest $request, Juego $juego)
    {
        $juego->update($request->validated());

        return redirect()->route('juegos.index')
            ->with('success', 'Juego updated successfully');
    }

    public function destroy($id)
    {
        Juego::find($id)->delete();

        return redirect()->route('juegos.index')
            ->with('success', 'Juego deleted successfully');
    }
}
