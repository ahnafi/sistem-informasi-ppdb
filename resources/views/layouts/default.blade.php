<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include("includes.head")
        @vite(['resources/css/app.css',"resources/js/app.js"])
        <title> @yield("title") {{" | " . env("APP_NAME","Welcome")}}</title>
    </head>
    <body>
        <header>
            @include("includes.navbar")
        </header>

        <div id="main">
            @yield("main")
        </div>

        <footer>
            @include("includes.footer")
        </footer>
    </body>
</html>
