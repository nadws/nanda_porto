<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nanda Wahyudi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @vite('resources/css/app.css')

    <style>
        @keyframes fadeOutAnimation {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        .fadeOutAnimation {
            animation: fadeOutAnimation 1.5s ease-out;
        }
    </style>




</head>

<body class="bg-white dark:bg-black">
    <div class="flex items-center justify-center h-screen bg-gray-900 text-white" id="welcome-section">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4 font-poppins">Welcome to My Website</h1>
            <p class="text-lg text-gray-200 mb-8">Explore the amazing content waiting for you!</p>
            <button id="klik_buka"
                class="bg-yellow-500 mt-4 hover:bg-yellow-400 text-black py-2 px-4 rounded-lg font-poppins font-semibold transition duration-300">Get
                Started</button>
        </div>
    </div>



    <div class="hidden" id="main-content">
        <div class="md:p-10 xs:p-5">
            <button id="theme-toggle" type="button"
                class="text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm md:p-2.5 xs:p-1 float-right">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="grid grid-cols-4">
            <div class="col-span-1 md:flex xs:hidden"> </div>
            <div class="md:col-span-2 md:mt-10 xs:mt-5 xs:col-span-4 xs:ml-4 flex items-center">
                <img src="{{ asset('img/Group 2.png') }}" alt=""
                    class="rounded-full md:h-24 md:w-24 dark:hidden xs:h-14 xs:w-14">
                <img src="{{ asset('img/Group 3.png') }}" alt=""
                    class="rounded-full md:h-24 md:w-24 hidden dark:flex xs:h-14 xs:w-14">
                <div class="ml-4 flex flex-col">
                    <p class="whitespace-nowrap font-poppins text-black dark:text-white font-normal text-2xl">Nanda
                        Wahyudi
                    </p>
                    <p class="whitespace-nowrap font-poppins text-black dark:text-white font-light text-lg">Fullstack
                        Web
                        Developer
                    </p>
                </div>
            </div>
            <div class="col-span-1 md:flex xs:hidden"></div>
        </div>
        <x-about />
        <x-work_experince />
        <x-contact />

        <br>
        <br>
        <br>
    </div>






</body>
<script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>
<script>
    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function() {

        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

            // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }

    });
</script>
<script>
    document.getElementById('klik_buka').addEventListener('click', function() {
        var welcomeSection = document.getElementById('welcome-section');
        welcomeSection.classList.add('fadeOutAnimation');
        setTimeout(function() {
            welcomeSection.style.display = 'none';
            var mainContent = document.getElementById('main-content');
            mainContent.style.display = 'block';
        }, 1500); // Sesuaikan dengan durasi animasi (dalam milidetik)
    });
</script>




</html>
