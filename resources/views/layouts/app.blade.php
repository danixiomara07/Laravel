<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plantilla Blade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <nav class="nav nav-pills flex-column flex-sm-row">
        <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="/">IESP ILAVE</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="/">Bienvenido</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="/suma">Sumar</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="/producto">Data</a>
        <a href="{{ route('unsa.index') }}" class="nav-link">UNSA</a>
    </nav>
    @yield('content')

</body>
</html>