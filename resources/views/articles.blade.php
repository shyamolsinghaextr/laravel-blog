@extends('layout.masterLayout')

@section('content')
  <!-- Page Header -->
  <div class="page-header">
    <div class="container">
      <h1 class="display-5">Latest Articles</h1>
      <p class="lead">Browse through our latest posts and insights</p>
    </div>
  </div>

  <!-- Articles Grid -->
  <div class="container py-5">
    <div class="row g-4">

      <!-- Article 1 -->
      <div class="col-md-4">
        <div class="card article-card">
          <img src="https://source.unsplash.com/400x250/?technology" class="card-img-top" alt="Article Image">
          <div class="card-body">
            <h5 class="card-title">Understanding JavaScript Closures</h5>
            <p class="text-muted">April 10, 2025</p>
            <p class="card-text">Closures are one of the most powerful features in JavaScript. Learn how they work and how to use them effectively.</p>
            <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
          </div>
        </div>
      </div>

      <!-- Article 2 -->
      <div class="col-md-4">
        <div class="card article-card">
          <img src="https://source.unsplash.com/400x250/?blogging" class="card-img-top" alt="Article Image">
          <div class="card-body">
            <h5 class="card-title">Top 10 Blogging Tips for Beginners</h5>
            <p class="text-muted">March 28, 2025</p>
            <p class="card-text">Just starting a blog? These tips will help you stay consistent, reach your audience, and grow organically.</p>
            <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
          </div>
        </div>
      </div>

      <!-- Article 3 -->
      <div class="col-md-4">
        <div class="card article-card">
          <img src="https://source.unsplash.com/400x250/?coding" class="card-img-top" alt="Article Image">
          <div class="card-body">
            <h5 class="card-title">Mastering Flexbox and CSS Grid</h5>
            <p class="text-muted">March 15, 2025</p>
            <p class="card-text">Layout your web pages like a pro. Compare Flexbox and CSS Grid with practical examples and use-cases.</p>
            <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
          </div>
        </div>
      </div>

      <!-- Add more articles here as needed -->

    </div>
  </div>



@endsection