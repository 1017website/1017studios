<html>

<head>
    <!--SEO-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta property="og:site_name" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta name="keywords" content="">
    <script type="text/javascript" async="" src=""></script>
    <link rel='icon' href='{{ asset(' assets/img/favicon.png') }}'>
    <title>1017 Studios</title>

    <!--CSS-->
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!--Font-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/function.js') }}"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <style>
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .loader {
            animation: spin 4s linear infinite;
        }

        .menu li a.active {
            font-weight: bold;
        }

        @keyframes rock-boat {
            0% {
                transform: rotate(0deg);
            }

            50% {
                transform: rotate(5deg);
            }
        }

        .boat {
            animation: rock-boat 3s ease-in-out infinite;
        }

        .portfolio-item {
            display: block;
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
        }

        .fade-in {
            opacity: 1;
        }

        .fade-out {
            opacity: 0;
        }

        .scrolled {
            opacity: 0.8;
            /* Set the desired opacity value when scrolling */
        }
    </style>
</head>

<body class="bg-white">
    {{-- <div id="loader" class="flex items-center justify-center h-screen bg-black">
        <div class="loader animate-spin rounded-full border-t-4 border-[#3498db] border-solid h-16 w-16"></div>
    </div>
    <div id="content" class="hidden"> --}}
        <div id="__layout">
            <div class="min-h-screen font-sans antialiased relative">
                <div class="relative">
                    <div class="absolute top-0 left-0 w-full h-[130vh] sm:h-[225vh] lg:h-[100vh]">
                    </div>
                    <nav
                        class="hover:shadow-xl fixed z-10 w-full text-neutral-800 bg-black shadow-2xl hover:bg-[#181818] duration-500">
                        <div
                            class="flex flex-col max-w-screen-xl px-8 mx-auto lg:items-center lg:justify-between lg:flex-row py-4">
                            <div class="flex flex-col lg:flex-row items-center space-x-4 xl:space-x-8">
                                <div class="w-full flex flex-row items-center justify-between py-6">
                                    <div><a href="{{url('/')}}"><img src="{{ asset('assets/img/logo.png') }}"
                                                alt="Nefa Logo" class="w-24 xl:w-28"></a>
                                    </div>
                                    <div class="lg:hidden">
                                        <button
                                            class="navbar-burger rounded-lg focus:outline-none focus:shadow-outline"><span
                                                aria-hidden="true" role="img"
                                                class="material-design-icon segment-icon"><svg fill="white" width="24"
                                                    height="24" viewBox="0 0 24 24" class="material-design-icon__svg">
                                                    <path d="M21,8H3V6H21M9,13H21V11H9M9,18H21V16H9">
                                                        <!---->
                                                    </path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="space-x-3 hidden lg:flex">
                                <ul
                                    class="menu w-full h-auto flex flex-col flex-grow lg:items-center pb-4 lg:pb-0 lg:justify-end lg:flex-row origin-top duration-300 xl:space-x-2 space-y-3 lg:space-y-0 hidden lg:flex">
                                    <li class="w-25"><a href="{{url('/')}}"
                                        class="md:px-2 py-2 font-light text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                        Home
                                    </a></li>
                                    <li class="w-25"><a href="{{url('/portofolio')}}"
                                            class="md:px-2 py-2 font-light text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                            Portofolio
                                        </a></li>
                                    <li class="w-25"><a href="{{url('/about_us')}}"
                                            class="md:px-2 py-2 font-light text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                            Tentang Kami
                                        </a></li>
                                    <li class="w-25"><a href="{{url('/testimoni')}}"
                                            class="md:px-2 py-2 font-light text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                            Testimoni
                                        </a></li>
                                    <li class="w-25"><a href="{{url('/kontak')}}"
                                            class="md:px-2 py-2 font-light text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                            Kontak
                                        </a></li>
                                    <li class="w-25"><a href="{{url('/berita')}}"
                                            class="md:px-2 py-2 font-light text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                            Berita
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="navbar-menu relative z-50 hidden">
                        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
                        <nav
                            class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-[#FFE200] overflow-y-auto">
                            <div class="flex items-center mb-8">
                                <a href="{{url('/')}}" class="mr-auto text-3xl font-bold leading-none"><img
                                        src="{{ asset('assets/img/favicon.png') }}" alt="Nefa Logo"
                                        class="w-24 xl:w-28"></a>
                                <button class="navbar-close">
                                    <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="black">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <div>
                                <ul>
                                    <li class="mb-1">
                                        <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-white hover:shadow-md rounded duration-300"
                                            href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="mb-1">
                                        <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-white hover:shadow-md rounded duration-300"
                                            href="{{url('/portofolio')}}">Portofolio</a>
                                    </li>
                                    <li class="mb-1">
                                        <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-white hover:shadow-md rounded duration-300"
                                            href="{{url('/about_us')}}">Tentang Kami</a>
                                    </li>
                                    <li class="mb-1">
                                        <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-white hover:shadow-md rounded duration-300"
                                            href="{{url('/testimoni')}}">Testimoni</a>
                                    </li>
                                    <li class="mb-1">
                                        <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-white hover:shadow-md rounded duration-300"
                                            href="{{url('/kontak')}}">Kontak</a>
                                    </li>
                                    <li class="mb-1">
                                        <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-white hover:shadow-md rounded duration-300"
                                            href="{{url('/berita')}}">Berita</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="flex flex-col">
                        @yield('content')
                    </div>

                    {{-- <button type="button" data-te-ripple-init="" data-te-ripple-color="light" class="fixed bottom-5 right-10 rounded-full bg-[#FFE200] p-3 text-xs font-medium uppercase leading-tight text-black shadow-md transition duration-150 ease-in-out hover:bg-black hover:text-[#FFE200] hover:shadow-lg focus:bg-[#FFE200] focus:shadow-lg focus:outline-none focus:ring-0 active:bg-[#FFE200] active:shadow-lg" id="btn-back-to-top" style="">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="h-6 w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path fill="currentColor" d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path>
                        </svg>
                      </button> --}}
                    
                    <div class="fixed bottom-20 right-10 z-10">
                        <a title="Chat Whatsapp" href="#" target="_blank"
                            class="block rounded-full transition-all shadow transform hover:scale-110 hover:rotate-12">
                            <img class="object-cover object-center lg:w-36 lg:h-36 w-16 h-16"
                                src="{{ asset('assets/img/order.png') }}" alt="Saya mau pesan">
                        </a>
                    </div>

                    <footer class="relative bg-black pt-8 pb-6">
                        <div class="container mx-auto px-4">
                            <div class="flex flex-wrap text-left lg:text-left place-content-center">
                                <div class="w-full lg:w-3/12 px-4">
                                    <div
                                        class="hidden sm:block col-span-12 mt-12 mb-12 lg:mt-20 lg:col-span-6 place-self-center"="">
                                        <div class="w-full place-self-center"=""><img data-aos="fade-up"
                                                data-aos-once="true" src="{{ asset('assets/img/logo.png') }}" alt=""
                                                class="-mt-30 aos-init aos-animate"="">
                                        </div>
                                        <div class="mt-7">
                                            <h3 class="text-xl font-bold text-white text-center">berdiri sejak
                                                2014<br>lebih dari 2000 klien</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4 place-self-center">
                                    <div class="flex flex-wrap items-top mb-6">
                                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a class="text-white hover:text-blueGray-800 font-bold block pb-2 text-xl"
                                                        href="#">Berita</a>
                                                </li>
                                                <li>
                                                    <a class="text-white hover:text-blueGray-800 font-bold block pb-2 text-xl"
                                                        href="#">Portofolio</a>
                                                </li>
                                                <li>
                                                    <a class="font-bold block pb-2 text-xl" style="color:#FFE200"
                                                        href="#">Saya mau pesan</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr class="lg:hidden color-white">
                                        <div class="w-full lg:w-6/12 px-4">
                                            <ul class="list-unstyled">
                                                <li class="flex items-center lg:justify-end">
                                                    <i class="fab fa-whatsapp text-white text-2xl mr-2"
                                                        aria-hidden="true"></i>
                                                    <a class="text-white hover:text-blueGray-800 font-bold block pb-2 text-xl lg:text-right"
                                                        href="tel:081938646560">081 938 64 6560</a>
                                                </li>
                                                <li class="flex items-center lg:justify-end">
                                                    <i class="fab fa-instagram text-white text-2xl mr-2"></i>
                                                    <a class="text-white hover:text-blueGray-800 font-bold block pb-2 text-xl lg:text-right"
                                                        href="https://www.instagram.com/studiodesign1017/"
                                                        target="_blank">studiodesign1017</a>
                                                </li>
                                                <li class="flex items-center lg:justify-end lg:mt-20">
                                                    <a class="font-bold text-white block pb-2 text-xl lg:text-right"
                                                        href="https://goo.gl/maps/your-location" target="_blank">
                                                        Jemundo, Sawunggaling<br>
                                                        Timur 3 RT 22 RW 04<br>
                                                        Sepanjang - Sidoarjo
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center md:justify-between justify-center">
                                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                                    <div class="text-sm text-white font-semibold py-1">
                                        © 2021 Copyright 1017studios All Right reserved
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    {{-- </div> --}}

    @yield('jquery')
    
    <script src="/js/tw-elements.umd.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');
    
        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    
        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');
    
        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    
        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });
    $(document).ready(function() {
    $(window).scroll(function() {
      if ($(this).scrollTop() > 0) {
        $('#navbar').addClass('scrolled');
      } else {
        $('#navbar').removeClass('scrolled');
      }
    });
  });
  window.addEventListener('load', function () {
  const loader = document.getElementById('loader');
  const content = document.getElementById('content');

  // Hide the loader and show the content when the page is fully loaded
  loader.style.display = 'none';
  content.style.display = 'block';
});
    </script>

    <script>
        const filterButtons = document.querySelectorAll('.filter-btn');
  const portfolioItems = document.querySelectorAll('.portfolio-item');

  filterButtons.forEach(button => {
    button.addEventListener('click', () => {
      const filterValue = button.dataset.filter;

      // Rearrange the grid layout based on the filter
      portfolioItems.forEach(item => {
        if (filterValue === 'all' || item.classList.contains(filterValue)) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });
      // Get the current URL pathname (e.g., "/about_us")
      var currentPath = window.location.pathname;
  
  // Select all menu items and loop through them
  var menuItems = document.querySelectorAll('.menu li a');
  menuItems.forEach(function(item) {
    // Check if the link's href matches the current URL
    if (item.getAttribute('href') === currentPath) {
      item.classList.add('active'); // Add the 'active' class to the matching link
    }
  });
//   const mybutton = document.getElementById("btn-back-to-top");
    
//     const scrollFunction = () => {
//       if (
//         document.body.scrollTop > 20 ||
//         document.documentElement.scrollTop > 20
//       ) {
//         mybutton.classList.remove("hidden");
//       } else {
//         mybutton.classList.add("hidden");
//       }
//     };
//     const backToTop = () => {
//       window.scrollTo({ top: 0, behavior: "smooth" });
//     };
//     mybutton.addEventListener("click", backToTop);
  
//     window.addEventListener("scroll", scrollFunction);
    </script>

</body>

</html>