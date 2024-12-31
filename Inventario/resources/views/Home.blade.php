<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="max-h-full flex border border-red-600">
    <div> 
        <x-aside/>
    </div>
    <div class="flex-grow">
        <div>
            <x-navbar/>
        </div>
        <div>
            <x-herramientas/>
        </div>
    </div>
</div>
</body>
</html>