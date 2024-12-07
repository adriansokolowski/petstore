<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Petstore Manager</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1>Petstore Manager</h1>

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @yield('content')
</div>
</body>
</html>
