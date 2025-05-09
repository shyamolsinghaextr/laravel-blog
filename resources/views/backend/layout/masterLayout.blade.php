<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> My Blog - {{ $title }}</title>
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/backend_style.css') }}" rel="stylesheet">
</head>
<body>



<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 sidebar d-none d-md-block">
            <div class="position-sticky">
                <h5 class="p-3">Dashboard</h5>
                <a href="{{ route('dashboard') }}">Dashboard</a>
                <a href="{{ route('create_post') }}">Create Post</a>
                <a href="{{ route('settings') }}">Settings</a>
            </div>
        </nav>

        <!-- Main -->
        <main class="col-md-10 ms-sm-auto col-lg-10 px-md-4">
            <nav class="navbar navbar-light bg-light my-3">
                <span class="navbar-brand mb-0 h1">@yield('title')</span>
            </nav>
            <div class="content">
                @yield('content')
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
