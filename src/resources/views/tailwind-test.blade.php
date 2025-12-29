<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-blue-600 mb-4">
            Tailwind is working!
        </h1>
        <p class="text-gray-700">
            If you see a blue heading and a gray background, Tailwind v4 is successfully compiled.
        </p>
        <div class="mt-4 p-4 bg-emerald-100 text-emerald-800 rounded border border-emerald-200">
            Custom emerald box to test more classes.
        </div>
    </div>
</body>
</html>
