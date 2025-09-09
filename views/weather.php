<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <div class="min-h-screen pl-6 pr-6 max-w-full bg-gray-100">
            <header class="flex justify-between items-center bg-gray-600  shadow-md rounded-b-lg px-4 py-6 sticky top-0 inset-x-0 mx-auto z-50">

            </header>
            <main class="mt-10">
                <!-- this section is button, 3 lines, title -->
                <div class="flex items-center">
                    <button class="p-2 mr-3">
                        <svg class="text-gray-600 w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </button>
                    <h1 class="text-2xl font-semibold text-blue-500 mr-3 cursor-pointer hidden md:block">VTDT Sky</h1>
                    <img src="./images/google-maps.gif" alt="Description of the image" class="w-6 h-6 ml-4 md:ml-6 lg:ml-8 xl:ml-14 hidden md:block">
                    <span class="text-white text-gray-800 ml-1 hidden md:block">Riga, Latvia</span>
                </div>

                    <!-- this section is searchbar + toggle mode button, has svg, img, path d, form / button svg path d span -->
                    <div class="flex items-center space-x-4">
                        <div class="relative flex items-center">
                            <form>
                                <input type="text" placeholder="Search Location" class="pl-10 pr-10 py-2 border-2 border-gray-300 rounded-lg text-sm w-full max-w-full min-w-[153px] " value="Cēsis">

                                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 2a9 9 0 1 0 6.293 15.293l4.707 4.707a1 1 0 0 0 1.414-1.414l-4.707-4.707A9 9 0 0 0 11 2zM11 4a7 7 0 1 1 0 14 7 7 0 0 1 0-14z"></path>
                                    </svg>
                                        <img src="./images/worldwide.gif" alt="Description of the image" class="absolute right-2.5 top-1/2 transform -translate-y-1/2 w-6 h-6  z-10">
                            </form>
                            <div class="absolute right-0.5 bg-gray-100 w-10 h-[90%] rounded-r-lg"></div>
                        </div>
                        <button class="relative flex items-center space-x-2 px-3 py-2 rounded-lg transition-colors duration-300 bg-gray-300 text-gray-900 hover:bg-gray-400 dark:bg-gray-800 dark:text-gray-200 dark:hover:bg-gray-700  hidden sm:flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"></path>
                            </svg>
                            <span>Light</span>
                        </button>
                    </div>

                <!-- this section is button, 3 lines, title -->
                <div class="flex items-center space-x-4"></div>

            </main>
        </div>
    </div>
</body>
</html>