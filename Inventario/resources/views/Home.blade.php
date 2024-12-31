<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="max-h-full flex">
    <div  >
        <x-aside/>
    </div>
    <div class="flex-grow max-h-full">
        <div >
        <x-datos/>
        </div>
        <div class="h-full border border-blue-600">
        <x-herramientas/>
        </div>
    </div>
    
    
</div>
</body>
</html>