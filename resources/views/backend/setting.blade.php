@extends('backend.layout.masterLayout')

@section('content')

<div class="container mt-5">
  <h2 class="mb-4">Create New Category</h2>

  <form action="#" method="POST">
    <!-- Category Name -->
    <div class="mb-3">
      <label for="name" class="form-label">Category Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" required>
    </div>

    <!-- Slug -->
    <div class="mb-3">
      <label for="slug" class="form-label">Slug (optional)</label>
      <input type="text" class="form-control" id="slug" name="slug" placeholder="category-name">
    </div>

    <!-- Description -->
    <div class="mb-3">
      <label for="description" class="form-label">Description (optional)</label>
      <textarea class="form-control" id="description" name="description" rows="4" placeholder="Write a brief description..."></textarea>
    </div>

    <!-- Submit -->
    <button type="submit" class="btn btn-success">Create Category</button>
    <a href="categories.html" class="btn btn-secondary">Cancel</a>
  </form>
</div>


@endsection