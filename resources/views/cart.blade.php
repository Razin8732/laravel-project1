@extends('layouts.app')

@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>cart</title>
        <link rel="stylesheet" href="/css/main.css">
    </head>

    <body>
        <div class="container">
            <a href="/home">Home</a>
        <h1>TITLE :{{ $products->p_title}}</h1>
        </div>
    </body>

    </html>


@endsection
