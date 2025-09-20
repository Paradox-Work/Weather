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
            <header class="flex justify-between items-center bg-white   shadow-md rounded-b-lg px-4 py-6 sticky top-0 inset-x-0 mx-auto z-50">

   <!-- this section is button, 3 lines, title -->
                <div class="flex items-center">
                    <!-- 3 LINES like menu or sum -->
                    <button class="p-2 mr-3">
                        <!-- 3 line image -->
                        <svg class="text-gray-600 w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <!-- Something that also makes 3 line exist, the creator of it* prob -->
                            <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </button>
                    <!-- Webpage title -->
                    <h1 class="text-2xl font-semibold text-blue-500 mr-3 cursor-pointer hidden md:block">VTDT Sky</h1>
                    <!-- Just fancy logo next to it FILLED-->
                    <img src="./images/google-maps.gif" alt="doodoo" class="w-6 h-6 ml-4 md:ml-6 lg:ml-8 xl:ml-14 hidden md:block">
                    <!-- Location title, must replace with json!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                    <span class="text-gray-800 text-gray-800 ml-1 hidden lg:block">Riga, Latvia</span>
                </div>

                    <!-- this section is searchbar + toggle mode button, has svg, img, path d, form / button svg path d span -->
                    <div class="flex items-center space-x-4">
                        <div class="relative flex items-center">
                            <!-- Form obviously of the searchbar -->
                            <form> 
                                <!-- Input container --> 
                                <input type="text" placeholder="Search Location" class="pl-10 pr-10 py-2 border-2 border-gray-300 rounded-lg text-sm w-full max-w-full min-w-[153px] " value="Cēsis"> 
                                    <!-- Picture must be filled --> 
                                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 24 24" xmlns="./images/worldwide.gif"> 
                                        <!-- this section is button, 3 lines, title --> 
                                        <path d="M11 2a9 9 0 1 0 6.293 15.293l4.707 4.707a1 1 0 0 0 1.414-1.414l-4.707-4.707A9 9 0 0 0 11 2zM11 4a7 7 0 1 1 0 14 7 7 0 0 1 0-14z"></path> 
                                    </svg> 
                                <!-- this section is button, 3 lines, title -->
                                <img src="./images/worldwide.gif" alt="Description of the image" class="absolute right-2.5 top-1/2 transform -translate-y-1/2 w-6 h-6 z-10"> 
                            </form>
                            <!-- this section is button, 3 lines, title -->
                            <div class="absolute right-0.5 bg-gray-100 w-10 h-[90%] rounded-r-lg"></div>
                        </div>
                        <!-- this section is button, 3 lines, title -->
                        <button class="relative flex items-center space-x-2 px-3 py-2 rounded-lg transition-colors duration-300 bg-gray-300 text-gray-900 hover:bg-gray-400 dark:bg-gray-800 dark:text-gray-200 dark:hover:bg-gray-700  hidden sm:flex">
                            <!-- this section is button, 3 lines, title -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                <!-- this section is button, 3 lines, title -->
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"></path>
                            </svg>
                            <!-- this section is button, 3 lines, title -->
                            <span>Light</span>
                        </button>
                    </div>

                <!-- this section is button, 3 lines, title -->
                <div class="flex items-center space-x-4">
                    <!-- this section is button, 3 lines, title -->
                    <button class="p-2 rounded-full hidden sm:block">
                        <img src="./images/notification.gif" alt="Description of the image" class="size-7">
                        <!-- this section is button, 3 lines, title -->
                        </button>
                            <img src="./images/profile-pic.jpg" alt="Description of the image" class="rounded-full w-9 h-9 hidden sm:block lg:hidden">
                        <!-- this section is button, 3 lines, title -->
                        <button class="p-2 rounded-full hidden lg:block">
                            <img src="./images/settings.gif" alt="Description of the image" class="size-7">
                   </button>
                   
                </div>

            </header>
           <main class="mt-10">
             <div class="flex max-w-[100%] mx-auto">
                <div class="w-[60%] ${isDarkMode ? 'bg-gray-800 ' : 'bg-gray-100 '}`} pe-8 responsive-width">
                    <!-- Current time, weather,  -->
                    <section class="bg-white p-6 rounded-lg shadow-md mb-6">
                        <div class="flex flex-wrap justify-between">
                            <div class="w-full sm:w-auto">
                                <div class="text-sm text-gray-800">Current Weather</div>
                                <div class="text-lg font-medium text-black-700">Local time: 5:10 PM</div>
                                <div class="flex items-center">
                                    <img class="w-12 h-12" src="./images/176.jpg" alt="Weather Icon">
                                    <div class="text-5xl font-semibold text-black pl-3">13.8</div>
                                    <p class="text-2xl font-semibold text-gray-800  pr-2 mb-2">°C</p>
                                    <div class="flex flex-col text-sm text-gray-500 pl-6">
                                        <div class="text-gray-800">Patchy rain nearby</div>
                                        <div class="text-gray-900">Feels Like 12.1°C</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full sm:w-auto mt-4 sm:mt-0 text-gray-600"></div>
                        </div>
                        <p class="mt-4 text-gray-800"></p>
                    </section>
                    <!-- Air quality, wind, humidity, vissibility, pressure x2 -->
                    <section class="grid grid-cols-2 gap-6 lg:grid-cols-3 mb-6">
                        <div class=" bg-white p-4 rounded-lg shadow-md flex flex-col items-start">
                            <div class="flex items-center space-x-2">
                                <img src="./images/clouds.gif" alt="Description of the image" class="size-6">
                                <span class="text-gray-800">Air Quality </span>
                            </div>
                            <span class="text-2xl text-black font-semibold ml-8">1</span>
                        </div>
                          <div class="bg-white text-gray-800 p-4 rounded-lg shadow-md flex flex-col items-start">
                            <div class="flex items-center space-x-2">
                                <img src="./images/wind.gif" alt="Description of the image" class="size-6">
                                <span class="text-gray-800">Wind</span>
                            </div>
                            <span class="text-2xl font-semibold ml-8">18.4 km/h</span>
                          </div>
                            <div class="bg-white text-gray-800 p-4 rounded-lg shadow-md flex flex-col items-start">
                                <div class="flex items-center space-x-2">
                                <img src="./images/humidity.gif" alt="Description of the image" class="size-6">
                                <span class="text-gray-800">Humidity</span>
                                </div>
                                <span class="text-2xl font-semibold ml-8">87%</span>
                            </div>
                             <div class="bg-white text-gray-800 p-4 rounded-lg shadow-md flex flex-col items-start">
                                <div class="flex items-center space-x-2">
                                    <img src="./images/vision.gif" alt="Description of the image" class="size-6">
                                    <span class="text-gray-800">Visibility</span>
                                </div>
                                    <span class="text-2xl font-semibold ml-8"> 10 km</span>
                                </div>
                           <div class="bg-white text-gray-800 p-4 rounded-lg shadow-md flex flex-col items-start">
                            <div class="flex items-center space-x-2">
                                <img src="./images/air-pump.gif" alt="Description of the image" class="size-6">
                                <span class="text-gray-800">Pressure</span>
                            </div>
                                <span class="text-2xl font-semibold ml-8"> 29.97 in</span>
                           </div>
                         <div class="bg-white text-gray-800 p-4 rounded-lg shadow-md flex flex-col items-start">
                            <div class="flex items-center space-x-2">
                                <img src="./images/air-pump.gif" alt="Description of the image" class="size-6">
                                <span class="text-gray-800">Pressure</span>
                            </div>
                                <span class="text-2xl font-semibold ml-8">1015°</span>
                        </div>
                    </section>
                    <!-- This shi is neat scrollable left right 3rd section thats on phones visible -->
                    <div class="flex justify-start items-center mb-4 block lg:hidden "></div>
                    <!-- Sun and Moon summary?  -->
                    <section class="bg-white text-gray-800 p-6 rounded-lg shadow-md pb-14">
                        <div class="flex justify-start items-center mb-4">
                            <span>Sun &amp; Moon Summary</span>
                        </div>
                        <div class="flex flex-col sm:flex-row justify-between items-start">
                            <div class="flex items-center">
                                <img src="./images/sun.gif" alt="Sun Icon" class="size-12">
                                <div class="flex flex-col text-sm  pl-5">
                                    <div>Air Quality</div>
                                    <span class="text-black text-xl font-semibold ">1</span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center space-x-4 pt-4 sm:pt-0 sm:w-[70%]">
                                     <div class="flex flex-col items-center">
                                        <img src="./images/field.gif" alt="Sunrise Icon" class="w-6 h-6 mb-1">
                                        <div class=" text-sm">Sunrise</div>
                                        <span class="text-blank text-sm font-semibold ">07:00 AM</span>
                                    </div>
                                    <div class="relative w-48 h-14 overflow-hidden">
                                        <svg class="absolute top-0 left-0 w-full h-full" viewBox="0 0 100 50">
                                            <path d="M 10,50 A 40,40 0 1 1 90,50" fill="none" stroke="#e5e5e5" stroke-width="10"></path>
                                            <path d="M 10,50 A 40,40 0 1 1 90,50" fill="none" stroke="#f59e0b" stroke-width="10" stroke-dasharray="126" stroke-dashoffset="67.54999999999998"></path>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <img src="./images/sunset.gif" alt="Sunset Icon" class="w-6 h-6 mb-1">
                                        <div class=" text-sm">Sunset</div>
                                        <span class="text-black text-sm font-semibold ">07:23 PM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row justify-between items-start pt-12">
                            <div class="flex items-center">
                                <img src="./images/moon.gif" alt="Moon Icon" class="size-12">
                                <div class="flex flex-col text-sm  pl-5">
                                    <div>Air Quality</div>
                                    <span class="text-black text-xl font-semibold ">1</span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center space-x-4 pt-6 sm:pt-0 sm:w-[70%]">
                                    <div class="flex flex-col items-center">
                                        <img src="./images/moon-rise.gif" alt="Moonrise Icon" class="w-6 h-6 mb-1">
                                        <div class=" text-sm">Moonrise</div>
                                        <span class="text-black text-sm font-semibold ">04:57 AM</span>
                                    </div>
                                        <div class="relative w-48 h-14 overflow-hidden">
                                            <svg class="absolute top-0 left-0 w-full h-full" viewBox="0 0 100 50">
                                                <path d="M 10,50 A 40,40 0 1 1 90,50" fill="none" stroke="#e5e5e5" stroke-width="10"></path>
                                                <path d="M 10,50 A 40,40 0 1 1 90,50" fill="none" stroke="#0D92F4" stroke-width="10" stroke-dasharray="126" stroke-dashoffset="59.91999999999999"></path>
                                            </svg>
                                        </div>
                                        <div class="flex flex-col items-center">
                                            <img src="./images/moon-set.gif" alt="Moonset Icon" class="w-6 h-6 mb-1">
                                            <div class=" text-sm">Moonset</div>
                                            <span class="text-black text-sm font-semibold">07:03 PM</span>
                                        </div>
                                    </div>
                            </div>

                        </div> 
                    </section>
                </div>
                <div class="relative w-[40%] bg-white text-gray-800 p-6 rounded-lg shadow-md hidden lg:block">
                    <div class="flex justify-start items-center mb-4">
                        <div class="flex space-x-4">
                            <button class="pb-1 text-black border-black border-b-2 font-semibold">Today</button>
                            <button class="pb-1 text-gray-800">Tomorrow</button>
                            <button class="pb-1 text-gray-800">10 Days</button>
                        </div>
                    </div>   
                    <div>
                        <div class="relative overflow-y-auto overflow-x-auto whitespace-nowrap pr-2">
                            <!--12:00 am-->
                            <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/night/248.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">12:00AM</span>
                                        <span class="font-semibold text-gray-700">Fog</span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">10.8</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 9.4 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 98%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 1:00 AM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/night/248.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">1:00AM</span>
                                        <span class="font-semibold text-gray-700">Fog</span>
                                    </div>
                                </div>
                                    <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                    <div class="flex items-center space-x-2">
                                        <div class="flex items-center">
                                            <div class="text-gray-800 text-2xl font-semibold">10.6</div>
                                            <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                        </div>
                                        <div class="flex flex-col items-start">
                                            <span class="text-sm text-gray-600">Wind: 9.4 km/h</span>
                                            <span class="text-sm text-gray-600">Humidity: 98%</span>
                                        </div>
                                    </div>
                            </div>
                            <!-- 2:00 AM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/night/248.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">2:00AM</span>
                                        <span class="font-semibold text-gray-700">Fog</span>
                                    </div></div>
                                    <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                    <div class="flex items-center space-x-2">
                                        <div class="flex items-center">
                                            <div class="text-gray-800 text-2xl font-semibold">10.6</div>
                                            <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                        </div>
                                        <div class="flex flex-col items-start">
                                            <span class="text-sm text-gray-600">Wind: 9.4 km/h</span>
                                            <span class="text-sm text-gray-600">Humidity: 98%</span>
                                        </div>
                                    </div>
                                </div>
                            <!-- 3:00 AM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/night/248.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">3:00AM</span>
                                        <span class="font-semibold text-gray-700">Fog</span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">10.2</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 8.6 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 98%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 4:00 AM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/night/248.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">4:00AM</span>
                                        <span class="font-semibold text-gray-700">Fog</span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">10.1</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 9 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 98%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 5:00 AM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/night/248.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">5:00AM</span>
                                        <span class="font-semibold text-gray-700">Fog</span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">10.1</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 10.4 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 98%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 6:00 AM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/night/248.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">6:00AM</span>
                                        <span class="font-semibold text-gray-700">Fog</span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">10.4</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 10.8 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 98%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 7:00 AM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/night/248.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">7:00AM</span>
                                        <span class="font-semibold text-gray-700">Fog</span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">11.6</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 12.2 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 98%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 8:00 AM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/day/122.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">8:00AM</span>
                                        <span class="font-semibold text-gray-700">Overcast </span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">13.2</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 13.7 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 96%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 9:00 AM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/day/122.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">9:00AM</span>
                                        <span class="font-semibold text-gray-700">Overcast </span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2">

                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">14.8</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 15.1 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 93%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 10:00 AM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/day/122.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">10:00AM</span>
                                        <span class="font-semibold text-gray-700">Overcast </span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">15.9</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 18.4 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 90%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 11:00 AM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/day/176.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">11:00AM</span>
                                        <span class="font-semibold text-gray-700">Patchy rain nearby</span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">16.6</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 19.4 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 87%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 12:00 PM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/day/176.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">12:00PM</span>
                                        <span class="font-semibold text-gray-700">Patchy rain nearby</span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">17.9</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 20.2 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 81%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 1:00 PM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/day/176.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">1:00PM</span>
                                        <span class="font-semibold text-gray-700">Patchy rain nearby</span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">19.5</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 20.2 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 74%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 2:00 PM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/day/176.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">2:00PM</span>
                                        <span class="font-semibold text-gray-700">Patchy rain nearby</span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center"><div class="text-gray-800 text-2xl font-semibold">21.3</div><p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p></div><div class="flex flex-col items-start"><span class="text-sm text-gray-600">Wind: 19.4 km/h</span><span class="text-sm text-gray-600">Humidity: 67%</span></div></div></div>
                            <!-- 3:00 PM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/day/113.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">3:00PM</span>
                                        <span class="font-semibold text-gray-700">Sunny</span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">21.8</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 18.4 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 65%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 4:00 PM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/day/113.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">4:00PM</span>
                                        <span class="font-semibold text-gray-700">Sunny</span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">21.3</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 18.4 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 67%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 5:00 PM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/day/113.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">5:00PM</span>
                                        <span class="font-semibold text-gray-700">Sunny</span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2">

                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">20.3</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 17.3 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 70%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 6:00 PM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/day/113.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">6:00PM</span>
                                        <span class="font-semibold text-gray-700">Sunny</span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">18.8</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 15.5 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 76%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 7:00 PM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/day/113.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">7:00PM</span>
                                        <span class="font-semibold text-gray-700">Sunny</span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">17.4</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 13.7 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 83%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 8:00 PM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/night/113.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">8:00PM</span>
                                        <span class="font-semibold text-gray-700">Clear </span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">16.8</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 14.4 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 87%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 9:00 PM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/night/113.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">9:00PM</span>
                                        <span class="font-semibold text-gray-700">Clear </span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">16.5</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 14.4 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 89%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 10:00 PM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/night/113.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">10:00PM</span>
                                        <span class="font-semibold text-gray-700">Clear </span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">16.1</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 14 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 92%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 11:00 PM -->
                             <div class="flex justify-between items-center h-16 border-b-2 border-gray-300 pb-2 pt-2">
                                <div class="flex items-center space-x-2">
                                    <img class="w-12 h-12" src="//cdn.weatherapi.com/weather/64x64/night/113.png" alt="Weather Icon">
                                    <div class="flex flex-col items-start overflow-hidden w-full sm:w-40 md:w-48 lg:w-56">
                                        <span class="text-gray-700 text-sm font-semibold">11:00PM</span>
                                        <span class="font-semibold text-gray-700">Clear </span>
                                    </div>
                                </div>
                                <div class="h-12 border-l-2 border-gray-400 mx-2"></div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex items-center">
                                        <div class="text-gray-800 text-2xl font-semibold">15.7</div>
                                        <p class="text-gray-600 text-xl font-semibold pr-2 mb-2">°C</p>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-sm text-gray-600">Wind: 13.7 km/h</span>
                                        <span class="text-sm text-gray-600">Humidity: 94%</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-7 h-7 text-gray-500">
                            <path d="M12 16l-6-6h12l-6 6z"></path>
                        </svg>
                    </div>
                </div>
             </div>
            </main>
        </div>
    </div>
</body>
</html>