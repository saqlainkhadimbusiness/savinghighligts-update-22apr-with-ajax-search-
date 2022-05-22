

    {{-- @include('frontend.header')
    @yield('content')
    @include('frontend.footer') --}}



    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>verified - Ecommerce Bootstrap 4 HTML Template</title>
    </head>
    <body>
        {{View::make('frontend.header')}}
        @yield('content')
        {{View::make('frontend.footer')}}


    </body>

    </html>

