<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>{{ ucwords(config('app.name')) }}</title>
        <meta content="" name="description">
        <meta content="" name="keywords"> <!-- Favicons -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('layouts.upconstruction.head-css')
    </head>
    <body>
        @include('layouts.upconstruction.header')
        @yield('content')
        @yield('bottom')
        @include('layouts.upconstruction.vendor-scripts')
    </body>
</html>
