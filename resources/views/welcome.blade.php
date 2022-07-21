<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
         @vite('resources/js/app.js')
    </head>
    <body class="antialiased">
        <div id="app" class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        
            
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <Home name="from global component updated" />
            </div>
        </div>
    </body>
</html>
