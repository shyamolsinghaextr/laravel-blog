@extends('backend.layout.masterLayout')

@section('content')

  <div class="container mt-5">
    <h2 class="mb-4">Edit Blog Post</h2>

    <form action="#" method="POST" enctype="multipart/form-data">
        
      <!-- Title -->
      <div class="mb-3">
        <label for="title" class="form-label">Post Title</label>
        <input type="text" class="form-control" id="title" name="title" value="How to Use Laravel Blade" required>
      </div>

      <!-- Category -->
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" id="category" name="category" required>
          <option value="Tech" selected>Tech</option>
          <option value="Lifestyle">Lifestyle</option>
          <option value="Business">Business</option>
        </select>
      </div>

      <!-- Featured Image -->
      <div class="mb-3">
        <label for="image" class="form-label">Change Featured Image</label>
        <input class="form-control" type="file" id="image" name="image">
        <div class="mt-2">
          <img src="https://via.placeholder.com/150" alt="Current Image" class="img-thumbnail" width="150">
        </div>
      </div>

      <!-- Content -->
      <div class="mb-3">
        <label for="content" class="form-label">Post Content</label>
        <textarea class="form-control" id="content" name="content" rows="8" required>Laravel Blade is a simple, yet powerful templating engine...</textarea>
      </div>

      <!-- Submit -->
      <button type="submit" class="btn btn-primary">Update Post</button>
      <a href="posts.html" class="btn btn-secondary">Cancel</a>
    </form>
  </div>

@endsection