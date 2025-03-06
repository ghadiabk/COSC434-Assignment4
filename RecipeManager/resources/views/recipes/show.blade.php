@extends('layouts.app')

@section('content')
    <div class="card p-4">
        <h2 class="text-center text-primary">{{ $recipe->name }}</h2>

        <p><strong>Description:</strong></p>
        <p class="text-muted">{{ $recipe->description }}</p>

        <p><strong>Ingredients:</strong></p>
        <p class="text-muted">{{ nl2br(e($recipe->ingredients)) }}</p>

        <p><strong>Instructions:</strong></p>
        <p class="text-muted">{{ nl2br(e($recipe->instructions)) }}</p>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('recipes.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Back to Recipes
            </a>

            <a href="{{ route('recipes.edit', $recipe) }}" class="btn btn-warning">
                <i class="bi bi-pencil"></i> Edit Recipe
            </a>
        </div>
    </div>
@endsection