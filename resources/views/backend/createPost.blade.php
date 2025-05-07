@extends('backend.layout.masterLayout')

@section('content')

  <div class="container mt-5">
    <h2 class="mb-4">Create New Blog Post</h2>

    <form action="#" method="POST" enctype="multipart/form-data">
      <!-- Title -->
      <div class="mb-3">
        <label for="title" class="form-label">Post Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter post title" required>
      </div>

      <!-- Category -->
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" id="category" name="category" required>
          <option value="">Select category</option>
          <option value="Tech">Tech</option>
          <option value="Lifestyle">Lifestyle</option>
          <option value="Business">Business</option>
        </select>
      </div>

      <!-- Featured Image -->
      <div class="mb-3">
        <label for="image" class="form-label">Featured Image</label>
        <input class="form-control" type="file" id="image" name="image">
      </div>

      <!-- Content -->
      <div class="mb-3">
        <label for="content" class="form-label">Post Content</label>
        <textarea class="form-control" id="content" name="content" rows="8" placeholder="Write your post here..." required></textarea>
      </div>
      
      <!-- Submit -->
      <button type="submit" class="btn btn-success">Publish Post</button>
      <a href="posts.html" class="btn btn-secondary">Cancel</a>
    </form>
  </div>

@endsection