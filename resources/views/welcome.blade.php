<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nanda Wahyudi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
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

        * {
            margin: 0;
            padding: 0;
        }



        #bg {
            background-color: #010433;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #liquid1-clip,
        #liquid2-clip {
            transform-origin: 50% 50%;
        }

        #liquid1-clip {
            animation: swingLeft 2s ease-in-out infinite;
        }

        #liquid2-clip {
            animation: swingLeft 2s ease-in-out infinite;
            animation-delay: 0.3s;
        }

        #liquid1 {
            transform-origin: 50% 50%;
            animation: liquid1Fill 2s linear infinite;
        }

        #liquid2 {
            transform-origin: 50% 50%;
            animation: liquid2Fill 2s linear infinite;
        }

        #bubble1 {
            transform-origin: 50% 50%;
            animation: bubbleRise1 2s linear infinite;
        }

        #bubble2 {
            animation: bubbleRise2 2s linear infinite;
        }

        @keyframes liquid1Fill {
            0% {
                transform: translate(0px, 180px) scaleX(-1);
            }

            25% {
                transform: translate(10px, 144px) scaleX(-2);
            }

            50% {
                transform: translate(0px, 108px) scaleX(-3);
            }

            75% {
                transform: translate(-10px, 72px) scaleX(-2);
            }

            100% {
                transform: translate(0px, 36px) scaleX(-1);
            }
        }

        @keyframes liquid2Fill {
            0% {
                transform: translate(-5px, 165px) scaleX(1);
            }

            25% {
                transform: translate(-15px, 129px) scaleX(3);
            }

            50% {
                transform: translate(-5px, 93px) scaleX(2);
            }

            75% {
                transform: translate(5px, 57px) scaleX(2);
            }

            100% {
                transform: translate(-5px, 21px) scaleX(1);
            }
        }

        @keyframes bubbleRise1 {
            from {
                transform: translate(60px, 280px);
            }

            to {
                transform: translate(60px, 100px)
            }
        }

        @keyframes bubbleRise2 {
            from {
                transform: translate(125px, 280px) rotate(45deg);
            }

            to {
                transform: translate(125px, 85px) rotate(45deg);
            }
        }

        @keyframes swingLeft {
            0% {
                transform: rotate(10deg);
            }

            50% {
                transform: rotate(-10deg);
            }

            100% {
                transform: rotate(10deg);
            }
        }

        @keyframes swingRight {
            0% {
                transform: rotate(-10deg);
            }

            50% {
                transform: rotate(10deg);
            }

            100% {
                transform: rotate(-10deg);
            }
        }
    </style>
</head>

<body class="bg-white dark:bg-[#111010]">
    <div id="welcome-section">
        <x-splash />
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
                <img src="{{ asset('img/porto.jpeg') }}" alt=""
                    class="rounded-full md:h-24 md:w-24  xs:h-14 xs:w-14">
                <div class="ml-4 flex flex-col">
                    <p class="whitespace-nowrap font-roboto text-black dark:text-white font-medium text-2xl">Nanda
                        Wahyudi
                    </p>
                    <p class="whitespace-nowrap font-roboto text-black dark:text-white font-normal text-lg">Fullstack
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
            welcomeSection.remove()
            var mainContent = document.getElementById('main-content');
            mainContent.style.display = 'block';
        }, 1500); // Sesuaikan dengan durasi animasi (dalam milidetik)
    });
</script>




</html>
