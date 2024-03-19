<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Http\Requests\RolRequest;

/**
 * Class RolController
 * @package App\Http\Controllers
 */
class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rols = Rol::paginate();

        return view('rol.index', compact('rols'))
            ->with('i', (request()->input('page', 1) - 1) * $rols->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rol = new Rol();
        return view('rol.create', compact('rol'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RolRequest $request)
    {
        Rol::create($request->validated());

        return redirect()->route('rols.index')
            ->with('success', 'Rol created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $rol = Rol::find($id);

        return view('rol.show', compact('rol'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $rol = Rol::find($id);

        return view('rol.edit', compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RolRequest $request, Rol $rol)
    {
        $rol->update($request->validated());

        return redirect()->route('rols.index')
            ->with('success', 'Rol updated successfully');
    }

    public function destroy($id)
    {
        Rol::find($id)->delete();

        return redirect()->route('rols.index')
            ->with('success', 'Rol deleted successfully');
    }
}
