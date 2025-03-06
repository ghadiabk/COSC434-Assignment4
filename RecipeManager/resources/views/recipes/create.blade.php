@extends('layouts.app')

@section('content')
    <h2 class="text-center text-primary mb-4">Add Recipe</h2>

    <div class="card p-4">
        <form action="{{ route('recipes.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Recipe Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter recipe name" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="3" placeholder="Enter description" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Ingredients</label>
                <textarea name="ingredients" class="form-control" rows="3" placeholder="List ingredients" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Instructions</label>
                <textarea name="instructions" class="form-control" rows="4" placeholder="Write cooking instructions" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">
                <i class="bi bi-save"></i> Save Recipe
            </button>
        </form>
    </div>
@endsection