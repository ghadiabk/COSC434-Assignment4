@extends('layouts.app')

@section('content')
    <h2 class="text-center text-primary mb-4">Recipe List</h2>

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('recipes.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Add New Recipe
        </a>
    </div>

    <div class="row">
        @foreach($recipes as $recipe)
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $recipe->name }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($recipe->description, 80) }}</p>

                        <a href="{{ route('recipes.show', $recipe) }}" class="btn btn-info btn-sm">
                            <i class="bi bi-eye"></i> View
                        </a>

                        <a href="{{ route('recipes.edit', $recipe) }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i> Edit
                        </a>

                        <form action="{{ route('recipes.destroy', $recipe) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection