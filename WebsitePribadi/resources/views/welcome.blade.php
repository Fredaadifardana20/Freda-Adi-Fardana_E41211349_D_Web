<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

    <div class="bg-gradient-to-b h-screen from-gray-800 to-gray-900">
        <header class="">
            <div class="px-4 mx-auto sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16 lg:h-20">
                    <div class="flex-shrink-0">
                        <h1 class="font-bold text-3xl mr-3 text-neutral-100"><span class="text-green-500">Fred</span>Blog
                        </h1>
                    </div>


                    <div class="hidden ml-auto lg:flex lg:items-center lg:justify-center lg:space-x-10">
                        <a href="#home" title=""
                            class="text-base font-semibold text-neutral-100 transition-all duration-200 hover:text-opacity-80">
                            Home </a>

                        <a href="#about" title=""
                            class="text-base font-semibold text-neutral-100 transition-all duration-200 hover:text-opacity-80">
                            About </a>

                        <a href="#blog" title=""
                            class="text-base font-semibold text-neutral-100 transition-all duration-200 hover:text-opacity-80">
                            Blog </a>
                    </div>
                </div>
            </div>
        </header>

        <section class="py-10 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                    <div>
                        <h1 class="text-4xl font-bold text-green-500 sm:text-6xl lg:text-7xl">
                            Freda Adi Fardana
                        </h1>

                        <p class="mt-8 text-base text-neutral-100 sm:text-xl">Saya Freda Adi Fardana yang bertempat tinggal di Kabupaten Jember, Jawa Timur. Saya merupakan mahasiswa Teknik Informatika di Politeknik Negeri Jember. Desain grafis dan pemrograman merupakan hal yang menyenangkan bagi saya.</p>
                    </div>

                    <div class="min-h-full min-w-full" style="background-image: url(../asset/profile.png)">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="about" class="flex-wrap justify-center items-center min-h-screen bg-neutral-100 min-w-full">
        <span id="about" class="text-xl font-bold">About</span>
    </div>
    <div id="blog" class="flex-wrap justify-center items-center min-h-screen bg-gray-900 min-w-full">
        <span class="text-neutral-100">blog</span>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>

</html>
