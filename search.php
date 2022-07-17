
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Installation - Laravel - The PHP Framework For Web Artisans</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

        <link rel="canonical" href="https://laravel.com/docs/9.x/installation">
    
    <!-- Primary Meta Tags -->
    <meta name="title" content="Laravel - The PHP Framework For Web Artisans">
    <meta name="description" content="Laravel is a PHP web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://laravel.com/">
    <meta property="og:title" content="Laravel - The PHP Framework For Web Artisans">
    <meta property="og:description" content="Laravel is a PHP web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.">
    <meta property="og:image" content="https://laravel.com/img/og-image.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://laravel.com/">
    <meta property="twitter:title" content="Laravel - The PHP Framework For Web Artisans">
    <meta property="twitter:description" content="Laravel is a PHP web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.">
    <meta property="twitter:image" content="https://laravel.com/img/og-image.jpg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#ff2d20">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ff2d20">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://use.typekit.net/ins2wgm.css">
    <link rel="stylesheet" type="text/css" href="https://laravel.com/css/app.css?id=3652ad0fdcd9a8bd254126af01e32f9d">

            <!-- Fathom - beautiful, simple website analytics -->
        <script src="https://cdn.usefathom.com/script.js" data-site="DVMEKBYF" defer></script>
        <!-- / Fathom -->
        <script src="https://unpkg.com/htmx.org@1.8.0" integrity="sha384-cZuAZ+ZbwkNRnrKi05G/fjBX+azI9DNOkNYysZ0I/X5ZFgsmMiBXgDZof30F5ofc" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/hyperscript.org@0.9.6"></script>
    <script>
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
        if (localStorage.theme === 'system') {
            if (e.matches) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
    });

    function updateTheme() {
        if (!('theme' in localStorage)) {
            localStorage.theme = 'system';
        }

        switch (localStorage.theme) {
            case 'system':
                if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
                document.documentElement.setAttribute('color-theme', 'system');
                break;

            case 'dark':
                document.documentElement.classList.add('dark');
                document.documentElement.setAttribute('color-theme', 'dark');
                break;

            case 'light':
                document.documentElement.classList.remove('dark');
                document.documentElement.setAttribute('color-theme', 'light');
                break;
        }
    }

    updateTheme();
</script>
</head>
<body
    x-data="{
        navIsOpen: false,
        searchIsOpen: false,
        search: '',
    }"

    step="1"

    _="
        on load 
        add .open to #docsContainer
        then add .disabled to #docsContainer
        then wait 3s
        then increment @step
        then put @step into #stepCounter
        then put 'Click this fucking bar' into #stepText
        then add .active to #thisiswhatasearchbarlookslike
        then wait 2s then send click to #triggerthesearchthing
        then increment @step
        then put @step into #stepCounter
        then put 'Type what you fucking need in the search bar' into #stepText
        <?php
            $searchQuery = @$_GET['q'];
            $searchQueryArray = str_split($searchQuery);
            $string = '';
            foreach ($searchQueryArray as $letter) {
                $string .= $letter;
        ?>
        then set #searchbarrrrr's @value to '<?php echo $string; ?>' then wait <?php echo rand(100, 200); ?>ms
        <?php
            }    
        ?>
        
        then send click to #triggerSearch
        then increment @step
        then put @step into #stepCounter
        then put 'Click what you fucking need' into #stepText
        then remove .disabled from #docsContainer
    "
    class="language-php h-full w-full font-sans text-gray-900 antialiased"
    >
    <div class="container bg-white p-4" style="z-index:9999;position:sticky;">
    <h1 class="text-6xl font-bold text-center text-black absolute">
          <a href="https://lmstdfy.readthedocs.wtf/">LMSTDFY</a>
        </h1>
        <p class="text-center"><strong>Step <span id="stepCounter">1</span>:</strong> <span id="stepText">Open the Laravel Docs.</a></p>
</div>
<style>
    #docsContainer {
        position:absolute;
        width:100%;
        left:100%;
        transition: 3s left;
    }

    #docsContainer.open {
        left: 0;
    }

    #thisiswhatasearchbarlookslike.active {
        border:1px solid red;
    }

    @media (max-width: 767px) {
        #search-overlay {
            padding-top: 75px !important;
        }
    }

    div.disabled { pointer-events: none; }
</style>
<div id="docsContainer">
    <a
    id="skip-to-content-link"
    href="#main-content"
    class="absolute bg-gray-100 px-4 py-2 top-3 left-3 text-gray-700 shadow-xl"
>
    Skip to content
</a>

    <div class="relative overflow-auto dark:bg-dark-700" id="docsScreen">
        <div class="relative lg:flex lg:items-start">
            <aside
                x-data="{
                    navIsOpen: false,
                    init() {
                        this.$watch('navIsOpen', (val) => {
                            if (val) {
                                document.body.classList.add('overflow-hidden');
                            } else {
                                document.body.classList.remove('overflow-hidden');
                            }
                        });
                    }
                }"
                class="hidden fixed top-0 bottom-0 left-0 z-20 h-full w-16 bg-gradient-to-b from-gray-100 to-white transition-all duration-300 overflow-hidden lg:sticky lg:w-80 lg:shrink-0 lg:flex lg:flex-col lg:justify-end lg:items-end 2xl:max-w-lg 2xl:w-full dark:from-dark-800 dark:to-dark-700"
                :class="{ 'w-64': navIsOpen }"
                @click.away="navIsOpen = false"
                @keydown.window.escape="navIsOpen = false"
            >
                <div class="relative min-h-0 flex-1 flex flex-col xl:w-80">
                    <a href="/" class="flex items-center py-8 px-4 lg:px-8 xl:px-16">
                        <img
                            class="w-8 h-8 shrink-0 transition-all duration-300 lg:w-12 lg:h-12"
                            :class="{ 'w-12 h-12': navIsOpen }"
                            src="https://laravel.com/img/logomark.min.svg"
                            alt="Laravel"
                            width="50"
                            height="52"
                        >
                        <img
                            x-show="navIsOpen"
                            x-cloak
                            class="ml-4 transition-all duration-300 lg:hidden"
                            x-transition:enter="duration-250 ease-out"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="duration-250 ease-in"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            src="https://laravel.com/img/logotype.min.svg"
                            alt="Laravel"
                            width="114"
                            height="29"
                        >
                        <img
                            src="https://laravel.com/img/logotype.min.svg"
                            alt="Laravel"
                            class="hidden ml-4 lg:block"
                            width="114"
                            height="29"
                        >
                    </a>
                    <div class="overflow-y-auto overflow-x-hidden px-4 lg:overflow-hidden lg:px-8 xl:px-16">
                        <nav x-show="navIsOpen" x-cloak class="mt-4 lg:hidden">
                            <div class="docs_sidebar">
                                <ul>
<li>
<h2>Prologue</h2>
</li>
</ul>

                            </div>
                        </nav>

                        
                        
                                                    <div :class="{ 'hidden': !navIsOpen }" x-cloak class="mt-4 px-3 py-2 border-dashed border-gray-200 border rounded-lg text-xs leading-loose text-gray-700 lg:block dark:border-gray-400 dark:text-gray-200">
                                <span class="font-medium">Laravel Vapor:</span> experience extreme scale on a dedicated serverless platform for Laravel. <a class="underline text-red-600" href="https://vapor.laravel.com">Sign up now!</a>.
                            </div>
                        
                                            </div>
                    <div class="sticky bottom-0 flex-1 flex flex-col justify-end lg:hidden">
                        <div class="py-4 px-4 bg-white">
                            <button class="relative ml-1 w-6 h-6 text-red-600 lg:hidden focus:outline-none focus:shadow-outline" aria-label="Menu" @click.prevent="navIsOpen = !navIsOpen">
                                <svg x-show="! navIsOpen" x-transition.opacity class="absolute inset-0 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                                <svg x-show="navIsOpen" x-transition.opacity x-cloak class="absolute inset-0 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </aside>

            <header
                class="lg:hidden"
                @keydown.window.escape="navIsOpen = false"
                @click.away="navIsOpen = false"
            >
                <div class="relative mx-auto w-full py-10 bg-white transition duration-200 dark:bg-dark-700">
                    <div class="mx-auto px-8 sm:px-16 flex items-center justify-between">
                        <a href="/" class="flex items-center">
                            <img class="" src="https://laravel.com/img/logomark.min.svg" alt="Laravel">
                            <img class="hidden ml-5 sm:block" src="https://laravel.com/img/logotype.min.svg" alt="Laravel">
                        </a>
                        <div class="flex-1 flex items-center justify-end">
                            <button id="header__sun" onclick="toSystemMode()" title="Switch to system theme" class="relative w-10 h-10 focus:outline-none focus:shadow-outline text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sun" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                                 </svg>
                            </button>
                            <button id="header__moon" onclick="toLightMode()" title="Switch to light mode" class="relative w-10 h-10 focus:outline-none focus:shadow-outline text-gray-500">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M17.75,4.09L15.22,6.03L16.13,9.09L13.5,7.28L10.87,9.09L11.78,6.03L9.25,4.09L12.44,4L13.5,1L14.56,4L17.75,4.09M21.25,11L19.61,12.25L20.2,14.23L18.5,13.06L16.8,14.23L17.39,12.25L15.75,11L17.81,10.95L18.5,9L19.19,10.95L21.25,11M18.97,15.95C19.8,15.87 20.69,17.05 20.16,17.8C19.84,18.25 19.5,18.67 19.08,19.07C15.17,23 8.84,23 4.94,19.07C1.03,15.17 1.03,8.83 4.94,4.93C5.34,4.53 5.76,4.17 6.21,3.85C6.96,3.32 8.14,4.21 8.06,5.04C7.79,7.9 8.75,10.87 10.95,13.06C13.14,15.26 16.1,16.22 18.97,15.95M17.33,17.97C14.5,17.81 11.7,16.64 9.53,14.5C7.36,12.31 6.2,9.5 6.04,6.68C3.23,9.82 3.34,14.64 6.35,17.66C9.37,20.67 14.19,20.78 17.33,17.97Z" />
                                </svg>
                            </button>
                            <button id="header__indeterminate" onclick="toDarkMode()" title="Switch to dark mode" class="relative w-10 h-10 focus:outline-none focus:shadow-outline text-gray-500">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 2A10 10 0 0 0 2 12A10 10 0 0 0 12 22A10 10 0 0 0 22 12A10 10 0 0 0 12 2M12 4A8 8 0 0 1 20 12A8 8 0 0 1 12 20V4Z" />
                                </svg>
                            </button>
                            <button class="ml-2 relative w-10 h-10 p-2 text-red-600 lg:hidden focus:outline-none focus:shadow-outline" aria-label="Menu" @click.prevent="navIsOpen = !navIsOpen">
                                <svg x-show="! navIsOpen" x-transition.opacity class="absolute inset-0 mt-2 ml-2 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                                <svg x-show="navIsOpen" x-transition.opacity x-cloak class="absolute inset-0 mt-2 ml-2 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                        </div>
                    </div>
                    <span :class="{ 'shadow-sm': navIsOpen }" class="absolute inset-0 z-20 pointer-events-none"></span>
                </div>
                <div
                    x-show="navIsOpen"
                    x-transition:enter="duration-150"
                    x-transition:leave="duration-100 ease-in"
                    x-cloak
                >
                    <nav
                        x-show="navIsOpen"
                        x-cloak
                        class="absolute w-full transform origin-top shadow-sm z-10"
                        x-transition:enter="duration-150 ease-out"
                        x-transition:enter-start="opacity-0 -translate-y-8 scale-75"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="duration-100 ease-in"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 -translate-y-8 scale-75"
                    >
                        <div class="relative p-8 bg-white docs_sidebar dark:bg-dark-600">
                            <ul>
<li>
<h2>Prologue</h2>
</li>
</ul>

                        </div>
                    </nav>
                </div>
            </header>

            <section class="flex-1 dark:bg-dark-700">
                <div class="max-w-screen-lg px-8 sm:px-16 lg:px-24">
                    <div class="flex flex-col items-end border-b border-gray-200 py-1 transition-colors dark:border-gray-700 lg:mt-8 lg:flex-row-reverse">
                        <div class="hidden lg:flex items-center justify-center ml-8">
                            <button id="header__sun" onclick="toSystemMode()" title="Switch to system theme" class="relative w-10 h-10 focus:outline-none focus:shadow-outline text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sun" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                                 </svg>
                            </button>
                            <button id="header__moon" onclick="toLightMode()" title="Switch to light mode" class="relative w-10 h-10 focus:outline-none focus:shadow-outline text-gray-500">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M17.75,4.09L15.22,6.03L16.13,9.09L13.5,7.28L10.87,9.09L11.78,6.03L9.25,4.09L12.44,4L13.5,1L14.56,4L17.75,4.09M21.25,11L19.61,12.25L20.2,14.23L18.5,13.06L16.8,14.23L17.39,12.25L15.75,11L17.81,10.95L18.5,9L19.19,10.95L21.25,11M18.97,15.95C19.8,15.87 20.69,17.05 20.16,17.8C19.84,18.25 19.5,18.67 19.08,19.07C15.17,23 8.84,23 4.94,19.07C1.03,15.17 1.03,8.83 4.94,4.93C5.34,4.53 5.76,4.17 6.21,3.85C6.96,3.32 8.14,4.21 8.06,5.04C7.79,7.9 8.75,10.87 10.95,13.06C13.14,15.26 16.1,16.22 18.97,15.95M17.33,17.97C14.5,17.81 11.7,16.64 9.53,14.5C7.36,12.31 6.2,9.5 6.04,6.68C3.23,9.82 3.34,14.64 6.35,17.66C9.37,20.67 14.19,20.78 17.33,17.97Z" />
                                </svg>
                            </button>
                            <button id="header__indeterminate" onclick="toDarkMode()" title="Switch to dark mode" class="relative w-10 h-10 focus:outline-none focus:shadow-outline text-gray-500">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 2A10 10 0 0 0 2 12A10 10 0 0 0 12 22A10 10 0 0 0 22 12A10 10 0 0 0 12 2M12 4A8 8 0 0 1 20 12A8 8 0 0 1 12 20V4Z" />
                                </svg>
                            </button>
                        </div>
                        <div class="w-full lg:w-40 lg:pl-12">
                            <div>
                                <label class="text-gray-600 text-xs tracking-widest uppercase dark:text-gray-500" for="version-switcher">Version</label>
                                <div x-data class="relative w-full bg-white transition-all duration-500 focus-within:border-gray-600 dark:bg-gray-800">
                                    <select
                                        id="version-switcher"
                                        aria-label="Laravel version"
                                        class="appearance-none flex-1 w-full px-0 py-1 placeholder-gray-900 tracking-wide bg-white focus:outline-none dark:bg-dark-700 dark:text-gray-400 dark:placeholder-gray-500"
                                        @change="window.location = $event.target.value"
                                    >
                                                                                    <option  value="https://laravel.com/docs/master">Master</option>
                                                                                    <option selected value="https://laravel.com/docs/9.x">9.x</option>
                                                                                    <option  value="https://laravel.com/docs/8.x">8.x</option>
                                                                                    <option  value="https://laravel.com/docs/7.x">7.x</option>
                                                                                    <option  value="https://laravel.com/docs/6.x">6.x</option>
                                                                                    <option  value="https://laravel.com/docs/5.8">5.8</option>
                                                                                    <option  value="https://laravel.com/docs/5.7">5.7</option>
                                                                                    <option  value="https://laravel.com/docs/5.6">5.6</option>
                                                                                    <option  value="https://laravel.com/docs/5.5">5.5</option>
                                                                                    <option  value="https://laravel.com/docs/5.4">5.4</option>
                                                                                    <option  value="https://laravel.com/docs/5.3">5.3</option>
                                                                                    <option  value="https://laravel.com/docs/5.2">5.2</option>
                                                                                    <option  value="https://laravel.com/docs/5.1">5.1</option>
                                                                                    <option  value="https://laravel.com/docs/5.0">5.0</option>
                                                                                    <option  value="https://laravel.com/docs/4.2">4.2</option>
                                                                            </select>
                                    <img class="absolute inset-y-0 right-0 mt-2.5 w-2.5 h-2.5 text-gray-900 pointer-events-none" id="docs_search__version_arrow" src="https://laravel.com/img/icons/drop_arrow.min.svg" alt="">
                                    <img class="absolute inset-y-0 right-0 mt-2.5 w-2.5 h-2.5 text-gray-900 pointer-events-none" id="docs_search__version_arrow_dark" src="https://laravel.com/img/icons/drop_arrow.dark.min.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="relative mt-8 flex items-center justify-end w-full h-10 lg:mt-0" id="thisiswhatasearchbarlookslike">
                            <div class="flex-1 flex items-center">
                                <button
                                    class="relative inline-flex items-center text-gray-800 transition-colors dark:text-gray-400 w-full"
                                    @click.prevent="$dispatch('toggle-search-modal')" id="triggerthesearchthing"
                                >
                                    <svg class="w-5 h-5 text-gray-700 pointer-events-none transition-colors dark:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                                    <span class="ml-3">Search</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <section class="mt-8 md:mt-16">
                        <section class="docs_main max-w-prose">
                            
                            
                            <div id="main-content">
    <h1>Installation</h1>
<ul>
<li>
<a href="#meet-laravel">How to search de Laravel docs</a>
<ul>
<li>
<a href="#why-laravel">Why use the Laravel docs?</a>
</li>
</ul>
</li>

</ul>


                                <script async type="text/javascript" src="https://laravel.com//cdn.carbonads.com/carbon.js?serve=CKYILK3E&placement=laravelcom" id="_carbonads_js"></script>
</div>
                        </section>
                    </section>
                </div>
            </section>
        </div>
    </div>

<footer class="relative pt-12 dark:bg-dark-700">
    <div class="max-w-screen-2xl mx-auto w-full px-8">
        <div>
            <a href="/" class="inline-flex">
                <img class="w-16 h-16" src="https://laravel.com/img/logomark.min.svg" alt="Laravel" loading="lazy">
            </a>
        </div>

        <div class="mt-6 grid grid-cols-12 md:gap-x-8 gap-y-12 sm:mt-12">
            <div class="col-span-12 lg:col-span-4">
                <p class="max-w-sm text-xs text-gray-700 sm:text-sm dark:text-gray-500">Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in most web projects.</p>
                <ul class="mt-6 flex items-center space-x-3">
                    <li>
                        <a href="https://twitter.com/laravelphp">
                            <img id="footer__twitter_dark" class="hidden dark:inline-block w-6 h-6" src="https://laravel.com/img/social/twitter.dark.min.svg" alt="Twitter" width="24" height="20" loading="lazy">
                            <img id="footer__twitter" class="inline-block dark:hidden w-6 h-6" src="https://laravel.com/img/social/twitter.min.svg" alt="Twitter" width="24" height="20" loading="lazy">
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/laravel">
                            <img id="footer__github_dark" class="hidden dark:inline-block w-6 h-6" src="https://laravel.com/img/social/github.dark.min.svg" alt="GitHub" width="24" height="24" loading="lazy">
                            <img id="footer__github" class="inline-block dark:hidden w-6 h-6" src="https://laravel.com/img/social/github.min.svg" alt="GitHub" width="24" height="24" loading="lazy">
                        </a>
                    </li>
                    <li>
                        <a href="https://discord.gg/mPZNm7A">
                            <img id="footer__discord_dark" class="hidden dark:inline-block w-6 h-6" src="https://laravel.com/img/social/discord.dark.min.svg" alt="Discord" width="21" height="24" loading="lazy">
                            <img id="footer__discord" class="inline-block dark:hidden w-6 h-6" src="https://laravel.com/img/social/discord.min.svg" alt="Discord" width="21" height="24" loading="lazy">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/laravelphp">
                            <img id="footer__youtube_dark" class="hidden dark:inline-block w-6 h-6" src="https://laravel.com/img/social/youtube.dark.min.svg" alt="YouTube" width="169" height="150" loading="lazy">
                            <img id="footer__youtube" class="inline-block dark:hidden w-6 h-6" src="https://laravel.com/img/social/youtube.min.svg" alt="YouTube" width="169" height="150" loading="lazy">
                        </a>
                    </li>
                </ul>
            </div>
                            <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
                    <span class="uppercase dark:text-gray-200">Highlights</span>
                    <div class="mt-5">
                        <ul class="space-y-3 text-gray-700 dark:text-gray-500">
                                                            <li>
                                    <a href="/team" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Our Team</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/releases" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Release Notes</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/installation" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Getting Started</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/routing" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Routing</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/blade" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Blade Templates</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/authentication" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Authentication</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/authorization" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Authorization</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/artisan" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Artisan Console</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/database" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Database</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/eloquent" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Eloquent ORM</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/testing" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Testing</a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                            <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
                    <span class="uppercase dark:text-gray-200">Resources</span>
                    <div class="mt-5">
                        <ul class="space-y-3 text-gray-700 dark:text-gray-500">
                                                            <li>
                                    <a href="https://laracasts.com" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Laracasts</a>
                                </li>
                                                            <li>
                                    <a href="https://laravel-news.com" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Laravel News</a>
                                </li>
                                                            <li>
                                    <a href="https://laracon.us" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Laracon</a>
                                </li>
                                                            <li>
                                    <a href="https://laracon.eu/" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Laracon EU</a>
                                </li>
                                                            <li>
                                    <a href="https://larajobs.com" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Jobs</a>
                                </li>
                                                            <li>
                                    <a href="https://laracasts.com/discuss" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Forums</a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                            <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
                    <span class="uppercase dark:text-gray-200">Partners</span>
                    <div class="mt-5">
                        <ul class="space-y-3 text-gray-700 dark:text-gray-500">
                                                            <li>
                                    <a href="https://vehikl.com" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Vehikl</a>
                                </li>
                                                            <li>
                                    <a href="https://tighten.co" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Tighten</a>
                                </li>
                                                            <li>
                                    <a href="https://64robots.com/" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">64 Robots</a>
                                </li>
                                                            <li>
                                    <a href="https://kirschbaumdevelopment.com/" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Kirschbaum</a>
                                </li>
                                                            <li>
                                    <a href="https://www.curotec.com/services/technologies/laravel/" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Curotec</a>
                                </li>
                                                            <li>
                                    <a href="https://jump24.co.uk/" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Jump24</a>
                                </li>
                                                            <li>
                                    <a href="https://www.a2design.biz/" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">A2 Design</a>
                                </li>
                                                            <li>
                                    <a href="https://corporate.aboutyou.de/app/uploads/2019/08/INTRO-Pitch-I-AY-Tech.pdf?utm_source=laravelpartnersfindoutmore&amp;utm_medium=socialgroups&amp;utm_campaign=tech" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">ABOUT YOU</a>
                                </li>
                                                            <li>
                                    <a href="https://www.byte5.net/" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Byte 5</a>
                                </li>
                                                            <li>
                                    <a href="https://cubettech.com/" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Cubet</a>
                                </li>
                                                            <li>
                                    <a href="https://www.cyber-duck.co.uk/how-we-work/technology/laravel?utm_source=Laravel%20Partner&amp;utm_medium=Sponsorship" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Cyber-Duck</a>
                                </li>
                                                            <li>
                                    <a href="https://devsquad.com/" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">DevSquad</a>
                                </li>
                                                            <li>
                                    <a href="https://www.ideil.com/" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Ideil</a>
                                </li>
                                                            <li>
                                    <a href="https://romegadigital.com/" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Romega Software</a>
                                </li>
                                                            <li>
                                    <a href="https://www.worksome.com/" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Worksome</a>
                                </li>
                                                            <li>
                                    <a href="https://webreinvent.com/?utm_source=laravel&amp;utm_medium=laravel.com&amp;utm_campaign=patreon-sponsors" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">WebReinvent</a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                            <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
                    <span class="uppercase dark:text-gray-200">Ecosystem</span>
                    <div class="mt-5">
                        <ul class="space-y-3 text-gray-700 dark:text-gray-500">
                                                            <li>
                                    <a href="/docs/9.x/billing" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Cashier</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/dusk" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Dusk</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/broadcasting" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Echo</a>
                                </li>
                                                            <li>
                                    <a href="https://envoyer.io" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Envoyer</a>
                                </li>
                                                            <li>
                                    <a href="https://forge.laravel.com" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Forge</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/homestead" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Homestead</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/horizon" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Horizon</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/mix" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Mix</a>
                                </li>
                                                            <li>
                                    <a href="https://nova.laravel.com" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Nova</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/passport" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Passport</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/scout" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Scout</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/socialite" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Socialite</a>
                                </li>
                                                            <li>
                                    <a href="https://spark.laravel.com" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Spark</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/telescope" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Telescope</a>
                                </li>
                                                            <li>
                                    <a href="/docs/9.x/valet" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Valet</a>
                                </li>
                                                            <li>
                                    <a href="https://vapor.laravel.com" class="transition-colors hover:text-gray-600 dark:hover:text-gray-400">Vapor</a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                    </div>
        <div class="mt-10 border-t pt-6 pb-16 border-gray-200 dark:border-dark-500">
            <p class="text-xs text-gray-700 dark:text-gray-400">
                Laravel is a Trademark of Taylor Otwell. Copyright &copy; 2011-2022 Laravel LLC.
            </p>
            <p class="mt-6 text-xs text-gray-700 dark:text-gray-400">
                Code highlighting provided by <a href="https://torchlight.dev">Torchlight</a>
            </p>
        </div>
    </div>
</footer>

<div
    x-data="searchComponent()"
    @toggle-search-modal.window="open = !open"
    @keydown.window.escape="close"
    @keydown.window="handleKeydown"
    @keydown.escape.prevent.stop="close"
    x-show="open"
    x-cloak
    x-trap.noscroll.inert="open"
    role="dialog"
    aria-modal="true"
    x-id="['search-modal']"
    :aria-labelledby="$id('search-modal')"
    class="fixed inset-0 z-50 text-gray-400 overflow-y-auto"
>
    <div x-show="open" x-transition.opacity class="fixed inset-0 bg-dark-900 bg-opacity-80"></div>

    <div
        x-show="open"
        x-transition
        @click="close()"
        class="relative min-h-screen flex items-start justify-center p-4 lg:py-20"
        id="search-overlay"
    >
        <div
            @click.stop
            class="relative max-w-2xl w-full bg-dark-700 pt-8 px-8 pb-16"
        >
            <div
                class="relative w-full border-b border-gray-600 border-opacity-50 overflow-hidden transition-all duration-500 focus-within:border-gray-600"
            >
                <svg class="absolute inset-y-0 left-0 mt-1 w-5 h-5 text-gray-500 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                <input
                    x-model.debouce.200ms="search"
                    x-ref="searchInput"
                    class="flex-1 w-full pl-8 pr-4 py-1 tracking-wide text-gray-400 placeholder-gray-500 bg-transparent focus:outline-none"
                    placeholder="Search Docs (Press '/')"
                    aria-label="Search in the documentation"
                    id="searchbarrrrr"
                    @keydown.arrow-up.prevent="focusPreviousResult()"
                    @keydown.arrow-down.prevent="focusNextResult()"
                >

                <button x-on:click="search = '<?php echo @$_GET['q']; ?>'" style="display:none;" id="triggerSearch">Test</button>
            </div>

            <div x-show="search">
                <div x-show="hits.length" x-cloak class="mt-5 divide-y divide-gray-700 z-30">
                    <template x-for="(hit, index) in hits" :key="index" hidden>
                        <div>
                            <a
                                :id="'search-result-' + index"
                                :href="hit.url"
                                class="search-result -mx-2 block p-3 text-gray-400 transition-colors duration-200 focus:outline-none focus:bg-dark-800 focus:text-gray-200 hover:text-gray-200"
                                @keydown.arrow-up.prevent="focusPreviousResult(index)"
                                @keydown.arrow-down.prevent="focusNextResult(index)"
                            >
                                <div x-show="hit._highlightResult.hierarchy.lvl0" class="text-sm font-medium" x-html="hit._highlightResult.hierarchy.lvl0 ? hit._highlightResult.hierarchy.lvl0.value : ''"></div>
                                <div class="mt-2">
                                    <div x-show="hit._highlightResult.hierarchy.lvl1" class="text-sm">
                                        <span class="text-red-600 opacity-75">#</span> <span x-html="hit._highlightResult.hierarchy.lvl1 ? hit._highlightResult.hierarchy.lvl1.value : ''"></span>
                                    </div>

                                    <div x-show="hit._highlightResult.hierarchy.lvl2" class="text-sm">
                                        > <span x-html="hit._highlightResult.hierarchy.lvl2 ? hit._highlightResult.hierarchy.lvl2.value : ''"></span>
                                    </div>

                                    <div x-show="hit._highlightResult.hierarchy.lvl3" class="text-sm">
                                        > <span x-html="hit._highlightResult.hierarchy.lvl3 ? hit._highlightResult.hierarchy.lvl3.value : ''"></span>
                                    </div>

                                    <div x-show="hit._highlightResult.hierarchy.lvl4" class="text-sm">
                                        > <span x-html="hit._highlightResult.hierarchy.lvl4 ? hit._highlightResult.hierarchy.lvl4.value : ''"></span>
                                    </div>

                                    <div x-show="hit._highlightResult.hierarchy.lvl5" class="text-sm">
                                        > <span x-html="hit._highlightResult.hierarchy.lvl5 ? hit._highlightResult.hierarchy.lvl5.value : ''"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </template>
                </div>

                <div x-show="! hits.length" x-cloak class="mt-8 pb-32">
                    <div x-text="`We didn't find any result for '${search}'. Sorry!`"></div>
                </div>
            </div>

            <div x-show="! search" class="mt-8 pb-32">
                <p>Enter a search term to find results in the documentation.</p>
            </div>

            <div class="absolute bottom-0 inset-x-0 border-t border-dark-800 text-gray-400 flex justify-end">
                <a class="px-4 py-2 inline-block" target="_blank" href="https://www.algolia.com/?utm_source=laravel&utm_medium=link&utm_campaign=laravel_documentation_search">
                    <img width="105" src="https://laravel.com/img/icons/algolia.dark.min.svg" id="docs_search__algolia_dark" alt="Algolia">
                </a>
            </div>
        </div>

        <button x-show="open" x-transition.opacity class="absolute top-8 right-8 text-gray-400" @click.prevent="close">
            <span class="sr-only">Close search</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>

<script>
    var algolia_app_id = 'E3MIRNPJH5';
    var algolia_search_key = '1fa3a8fec06eb1858d6ca137211225c0';
    var version = '9.x';
</script>

<script src="https://laravel.com/js/app.js?id=dbbc444eaa3d5b8443ecfc5b698f3d0d"></script>

<script>
    var _gaq=[['_setAccount','UA-23865777-1'],['_trackPageview']];
    (function(d,t){
        var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)
    }(document,'script'));
</script>
</div>
</body>
</html>
