<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css">

    @vite('resources/css/app.css')

    <style>
        #delayed-image {
            animation: fadeInAndScale 1s ease-out;
            /* Sesuaikan durasi dan efek animasi yang diinginkan */
            display: none;
        }


        @keyframes fadeInAndScale {
            from {
                opacity: 0;
                transform: scale(0.5);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
    <style>
        .menu-item.active {
            /* Gaya untuk menu aktif */
            color: #ffcc00;
            /* Contoh: warna teks kuning */
            /* Tambahkan gaya lain sesuai kebutuhan */
        }



        /* Menambahkan padding pada elemen di bawah navigasi agar tidak tertutup oleh navigasi */
    </style>

</head>

<body>
    <x-nav />
    <section id="home"
        class="grid grid-cols-4 gap-2 col-span-6 bg-gradient-to-b from-[#010203] via-[#07132C] to-[#041F4C] to-[#0B6FA8] h-screen">
        <div class="col-span-2  p-28">
            <p class="font-poppins mt-14 mb-2 text-amber-400 text-3xl">Home</p>
            <h1 class="font-poppins text-white text-5xl font-bold blink-text ">Hello, I'm Nanda,</h1>
            <h1 class="font-poppins text-white text-5xl font-bold blink-text mt-3">a Programmer </h1>
            <p class="mt-4 text-white text-lg blink-text text-justify font-poppins">Navigating digital realms, I craft
                innovative
                solutions and
                turn bugs into opportunities for improvement. Let's shape the future of technology with creativity and
                lasting discoveries."</p>
        </div>
        <div class="col-span-2 md:flex hidden items-center justify-center">
            <img id="delayed-image" src="{{ asset('img/hero2.jpg') }}" alt="" class="h-4/6 rounded-xl">
        </div>
    </section>
    <x-about />



</body>
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    menuToggle.addEventListener('click', function() {
        menu.classList.toggle('hidden');
        menu.classList.toggle('animate__fadeIn');
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            document.getElementById("delayed-image").style.display = "block";
        }, 800); // Sesuaikan nilai delay sesuai kebutuhan
    });
</script>
<script>
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".menu-item");

    window.addEventListener("scroll", () => {
        let current = "";

        sections.forEach((section) => {
            const sectionTop = section.offsetTop - 60;
            const sectionHeight = section.clientHeight;

            if (window.pageYOffset >= sectionTop && window.pageYOffset < sectionTop + sectionHeight) {
                current = section.id;
            }
        });

        console.log("Current Section ID:", current);

        navLinks.forEach((link) => {
            link.classList.remove("active");
            if (link.getAttribute("data-target") === current) {
                link.classList.add("active");
            }
        });
    });
</script>

</html>
