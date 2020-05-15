<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="container">
            <header class="navbar p-2 bd-highlight">
                <h3 class="text-success">Adam's Veterinary Clinic</h3>
                @include('_parts/navbar')
            </header>
            
            <main>
                @yield('content')
            </main>
            
            @include('_parts/footer')
        </div>
    </body>
</html>