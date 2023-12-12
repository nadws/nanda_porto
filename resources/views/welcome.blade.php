<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300;400&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')

</head>

<body>
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <a href="#" class="text-white text-lg font-semibold">Your Logo</a>
            </div>
            <div class="space-x-4">
                <a href="#" class="text-white font-Silkscreen">Home</a>
                <a href="#" class="text-white font-Silkscreen">About</a>
                <a href="#" class="text-white font-Silkscreen">Services</a>
                <a href="#" class="text-white font-Silkscreen">Contact</a>
            </div>
        </div>
    </nav>
    <div
        class="grid grid-cols-3 gap-4 col-span-6 bg-gradient-to-b from-[#010203] via-[#07132C] to-[#041F4C] to-[#0B6FA8]  h-screen">
        <div class="col-span-2 p-36 ">
            <h1 class="font-Silkscreen text-white text-6xl font-semibold blink-text">Hello, I'm Nanda, a </h1>
            <h1 class="font-Silkscreen text-white text-6xl font-semibold blink-text">Code Explorer </h1>
            <p class="mt-4 text-white text-lg blink-text">Navigating digital realms, I craft innovative solutions and
                turn bugs into opportunities for improvement. Let's shape the future of technology with creativity and
                lasting discoveries."</p>
        </div>
        <div class="col-span-1 flex items-center justify-center">
            <img src="{{ asset('img/hero.jpg') }}" alt="" class="h-4/6 rounded-xl">
        </div>
    </div>


</body>

</html>
