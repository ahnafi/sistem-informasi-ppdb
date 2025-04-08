<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include("includes.head")
        @vite(['resources/css/app.css',"resources/js/app.js"])
        <title> @yield("title") {{" | " . env("APP_NAME","Welcome")}}</title>
    </head>
    <body>
        @include("includes.navbar")

        <div id="main">
            @yield("main")
        </div>

        @include("includes.footer")
    </body>
</html>
