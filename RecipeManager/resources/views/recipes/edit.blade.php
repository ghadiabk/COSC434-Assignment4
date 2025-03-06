@extends('layouts.app')

@section('content')
    <h2 class="text-center text-primary mb-4">Edit Recipe</h2>

    <div class="card p-4">
        <form action="{{ route('recipes.update', $recipe) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Recipe Name</label>
                <input type="text" name="name" class="form-control" value="{{ $recipe->name }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="3" required>{{ $recipe->description }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Ingredients</label>
                <textarea name="ingredients" class="form-control" rows="3" required>{{ $recipe->ingredients }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Instructions</label>
                <textarea name="instructions" class="form-control" rows="4" required>{{ $recipe->instructions }}</textarea>
            </div>

            <button type="submit" class="btn btn-success w-100">
                <i class="bi bi-check-circle"></i> Update Recipe
            </button>
        </form>
    </div>
@endsection