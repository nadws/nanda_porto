<nav class="bg-gray-800 p-4 fixed top-0 w-full z-50">
    <div class="container mx-auto flex justify-between items-center">
        <div>
            <a href="#" class="text-white text-lg font-semibold"><img src="{{ asset('img/logo.png') }}"
                    alt=""></a>
        </div>
        <div class="hidden md:flex space-x-4">
            <a href="#home" class="text-white font-poppins menu-item active" data-target="home">Home</a>
            <a href="#project" class="text-white font-poppins menu-item" data-target="project">Project</a>
            <a href="#services" class="text-white font-poppins menu-item" data-target="services">Services</a>
            <a href="#contact" class="text-white font-poppins menu-item" data-target="contact">Contact</a>
        </div>
        <div class="md:hidden">
            <button id="menu-toggle" class="text-white focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>
    </div>
    <div id="menu" class="md:hidden hidden bg-gray-800 animate__animated animate__fadeIn animate__slower">
        <a href="#home" class="block text-white p-2 font-poppins menu-item active" data-target="home">Home</a>
        <a href="#about" class="block text-white p-2 font-poppins menu-item" data-target="about">About</a>
        <a href="#services" class="block text-white p-2 font-poppins menu-item" data-target="services">Services</a>
        <a href="#contact" class="block text-white p-2 font-poppins menu-item" data-target="contact">Contact</a>
    </div>
</nav>
