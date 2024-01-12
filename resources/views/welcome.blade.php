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
    <div class="flex items-center justify-center h-screen bg-gray-900 text-white" id="welcome-section">
        <div id="bg" class="relative">
            <svg width="270" height="270" viewBox="0 0 270 270" fill="none" id="klik_buka"
                class="cursor-pointer">
                <symbol id="container">
                    <circle cx="135" cy="135" r="130" stroke="#02CAF7" stroke-width="10" />
                </symbol>
                <symbol id="liquid">
                    <path
                        d="M0 71.0344C0 11.7849 73.6393 -15.5736 112.324 29.3037V29.3037C134.143 54.6151 171.778 58.8457 198.672 39.0103L206.818 33.002C231.973 14.4496 266.21 14.1976 291.635 32.3779V32.3779C318.355 51.4837 354.605 50.1371 379.833 29.1014L397.314 14.5252C414.946 -0.176172 439.21 -4.04721 460.54 4.43827V4.43827C484.364 13.9156 500 36.963 500 62.6028V399H0V71.0344Z"
                        fill="#02CAF7" fill-opacity="0.5" />
                </symbol>
                <symbol id="bubbles">
                    <path
                        d="M91 10C91 15.5228 86.5228 20 81 20C75.4772 20 71 15.5228 71 10C71 4.47715 75.4772 0 81 0C86.5228 0 91 4.47715 91 10Z"
                        fill="#CEF4FD" />
                    <path
                        d="M20 38C20 43.5228 15.5228 48 10 48C4.47715 48 0 43.5228 0 38C0 32.4772 4.47715 28 10 28C15.5228 28 20 32.4772 20 38Z"
                        fill="#CEF4FD" />
                    <circle cx="58.5" cy="58.5" r="7.5" fill="#CEF4FD" />
                    <circle cx="110.5" cy="78.5" r="7.5" fill="#CEF4FD" />
                    <circle cx="131" cy="33" r="5" fill="#CEF4FD" />
                    <circle cx="37" cy="111" r="5" fill="#CEF4FD" />
                </symbol>
                <defs>
                    <clipPath id="circleClip">
                        <circle cx="135" cy="135" r="130" />
                    </clipPath>
                </defs>

                <g class="loader">
                    <g id="liquid1-clip" clip-path="url(#circleClip)">
                        <g>
                            <use id="liquid1" href="#liquid" transform="translate(0,180)" />
                            <use id="bubble1" href="#bubbles" transform="translate(60,100)" />
                        </g>
                    </g>
                    <g id="liquid2-clip" clip-path="url(#circleClip)">
                        <g>
                            <use id="liquid2" href="#liquid" fill-opacity="0.15" transform="translate(0,175)" />
                            <use id="bubble2" href="#bubbles" transform="translate(60,100)" />
                        </g>
                    </g>
                    <use href="#container" />
                </g>
            </svg>

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
            welcomeSection.style.display = 'none';
            var mainContent = document.getElementById('main-content');
            mainContent.style.display = 'block';
        }, 1500); // Sesuaikan dengan durasi animasi (dalam milidetik)
    });
</script>




</html>
