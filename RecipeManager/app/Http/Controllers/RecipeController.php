<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Recipe::create($request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required'
        ]));
    
        return redirect()->route('recipes.index')->with('success', 'Recipe added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        $recipe->update($request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required'
        ]));
    
        return redirect()->route('recipes.index')->with('success', 'Recipe updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
    return redirect()->route('recipes.index')->with('success', 'Recipe deleted successfully');
    }
}
