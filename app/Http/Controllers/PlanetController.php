<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;
use App\Http\Requests\PlanetRequest;

class PlanetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', ['planets' => $planets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('planets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlanetRequest $request)
    {
        $planet = new Planet();

        $planet->name = $request->name;
        $planet->en_name = $request->en_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        $planet->save();

        return redirect(route('planets.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Planet $planet)
    {
        //Planet $planetはデータベースから取得しただけだから、連想配列で渡す必要あるよ！
        return view('planets.show', compact('planet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Planet $planet)
    {
        return view('planets.edit', compact('planet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlanetRequest $request, Planet $planet)
    {
        $planet->name = $request->name;
        $planet->en_name = $request->en_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        $planet->save();
        return redirect(route('planets.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Planet $planet)
    {
        $planet->delete();
        return redirect(route('planets.index'));
    }
}
