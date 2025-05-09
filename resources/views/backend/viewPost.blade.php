@extends('backend.layout.masterLayout')

@section('content')

<div class="container mt-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3">How to Use Laravel Blade</h1>
    <a href="edit.html" class="btn btn-sm btn-warning">Edit</a>
  </div>

  <p class="text-muted">
    <strong>Author:</strong> John Doe &nbsp; | &nbsp;
    <strong>Category:</strong> Tech &nbsp; | &nbsp;
    <strong>Status:</strong> <span class="badge bg-success">Published</span> &nbsp; | &nbsp;
    <strong>Date:</strong> May 8, 2025
  </p>

  <hr>

  <div class="mb-4">
    <img src="https://via.placeholder.com/900x300" alt="Featured Image" class="img-fluid rounded">
  </div>

  <div class="mb-5" style="line-height: 1.8;">
    <p>
      Laravel Blade is a simple, elegant templating engine that is included with Laravel. Unlike other PHP templating engines, Blade does not restrict you from using plain PHP code in your templates.
    </p>
    <p>
      Blade views are compiled into plain PHP code and cached until they are modified, meaning Blade adds essentially zero overhead to your application.
    </p>
    <p>
      This makes your application both easy to read and extremely fast. In this article, we’ll cover the basics of Blade syntax, template inheritance, and more.
    </p>
  </div>

  <a href="posts.html" class="btn btn-secondary">← Back to All Posts</a>
</div>



@endsection