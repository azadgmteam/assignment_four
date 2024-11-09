<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management System</title>
</head>
<body>

    <header>
        <h1>Product Management System</h1>
        <nav>
            <a href="{{ route('products.index') }}">Home</a>
            <a href="{{ route('products.create') }}">Create Product</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Product Management System</p>
    </footer>

</body>
</html>
