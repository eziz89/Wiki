<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Wiki')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('articles.index') }}">Articles</a>
        <a href="{{ route('categories.index') }}">Categories</a>
        <a href="{{ route('tags.index') }}">Tags</a>
        <a href="{{ route('groups.index') }}">Groups</a>
        <a href="{{ route('users.index') }}">Users</a>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
