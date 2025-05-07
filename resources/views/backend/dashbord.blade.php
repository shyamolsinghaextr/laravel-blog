@extends('backend.layout.masterLayout')

@section('content')

  <div class="container-fluid mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2>All Blog Posts</h2>
      <a href="#" class="btn btn-primary">+ New Post</a>
    </div>

    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Author</th>
          <th>Status</th>
          <th>Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>How to Use Laravel Blade</td>
          <td>John Doe</td>
          <td><span class="badge bg-success">Published</span></td>
          <td>2025-05-07</td>
          <td>
            <a href="#" class="btn btn-sm btn-info">View</a>
            <a href="#" class="btn btn-sm btn-warning">Edit</a>
            <a href="#" class="btn btn-sm btn-danger">Delete</a>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Deploy Laravel to Shared Hosting</td>
          <td>Jane Smith</td>
          <td><span class="badge bg-secondary">Draft</span></td>
          <td>2025-04-30</td>
          <td>
            <a href="#" class="btn btn-sm btn-info">View</a>
            <a href="#" class="btn btn-sm btn-warning">Edit</a>
            <a href="#" class="btn btn-sm btn-danger">Delete</a>
          </td>
        </tr>
        <!-- More rows as needed -->
      </tbody>
    </table>
  </div>

@endsection
