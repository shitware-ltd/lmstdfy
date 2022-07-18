<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/htmx.org@1.8.0" integrity="sha384-cZuAZ+ZbwkNRnrKi05G/fjBX+azI9DNOkNYysZ0I/X5ZFgsmMiBXgDZof30F5ofc" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/hyperscript.org@0.9.6"></script>
</head>
<body style="background: rgb(23, 25, 35)">
    <div class="container mx-auto max-w-5xl pt-20">
        <h1 class="text-6xl font-bold text-center text-white">
          LMSTDFY
        </h1>
        <p class="text-center text-white"><strong>L</strong>et <strong>M</strong>e <strong>S</strong>earch <strong>T</strong>he <strong>D</strong>ocs <strong>F</strong>or <strong>Y</strong>ou</p>
        
        <form class="mt-20" method="GET" action="search.php" id="lmstdfyForm" docs="laravel" onsubmit="return false">   
            <div class="flex gap-4 mb-4">
                <div class="flex items-center pl-4 rounded border border-gray-200 dark:border-gray-700 flex-1">
                    <input 
                        _="on click set #lmstdfyForm's @docs to 'laravel'"
                        checked 
                        id="bordered-radio-1" type="radio" value="Laravel" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-1" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Laravel</label>
                </div>
                <div class="flex items-center pl-4 rounded border border-gray-200 dark:border-gray-700 flex-1">
                    <input 
                        _="on click set #lmstdfyForm's @docs to 'php'"
                        id="bordered-radio-2" type="radio" value="PHP.net" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-2" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">PHP.net</label>
                </div>
                <div class="flex items-center pl-4 rounded border border-gray-200 dark:border-gray-700 flex-1">
                    <input 
                        _="on click set #lmstdfyForm's @docs to 'tailwindcss'"
                        id="bordered-radio-3" type="radio" value="TailwindCSS" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-3" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">TailwindCSS</label>
                </div>
            </div>
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="search" id="default-search" name="q" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search the Laravel docs..." required>
                <button 
                    _="
                        on click 
                            set :docs to #lmstdfyForm's @docs
                        then
                            get the (value of the previous <input/>) 
                        then
                            writeText('https://lmstdfy.readthedocs.wtf/search.php?q=' + it.replaceAll(' ', '+') + '&docs=' + :docs)
                            into the navigator's clipboard 
                        then 
                            show #output"
                    type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>

            <div id="output" style="display:none;" class="mt-4 bold text-white text-center">LMSTDFY link copied to your clipboard!</div>
        </form>

        <hr class="mt-10">

        <p class="text-white mt-4">Copyright <?php echo date('Y'); ?> - Shitware Ltd &middot; <a class="underline" href="https://github.com/shitware-ltd/lmstdfy" target="_blank">View sauce</a></p>
    </div>
</body>
</html>