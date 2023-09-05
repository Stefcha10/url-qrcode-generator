<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>URL QR Code Generator</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('images/qrcode.png')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.tailwindcss.com">
    <style>
        /* Your custom styles go here */
    </style>
</head>
<body class="antialiased bg-white dark:bg-gray-900">
    <nav class="bg-gray-200 border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-800">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="/" class="flex items-center">
                <img src="{{asset('images/qrcode.png')}}" class="mr-3 h-6 sm:h-9 rounded-lg" alt="Flowbite Logo">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">URL QR Code Generator</span>
            </a>
        </div>
    </nav>

    <div class="flex flex-col-reverse 2xl:grid 2xl:grid-cols-12">
        <div class="mt-10 2xl:col-span-7 flex flex-col">       
            <h1 class="text-2xl mb-5 dark:text-white text-center font-bold">Enter your URL below to generate a QR Code</h1> 
            <form class="flex flex-col" method="post" action="{{ route('generate.qr.code' )}}">
                @csrf
                <div class="relative z-0 mt-12 w-96 m-auto group">
                    <input type="url" name="url" id="url" class="dark:text-white peer ... text-zinc-700 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-400 appearance-none dark:border-gray-200 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-500 peer" placeholder="" required>
                    <label for="url" class="peer-focus font-medium absolute text-sm text-red-900 dark:text-red-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">ENTER URL</label>
                    <label for="size" class="block mb-2 mt-8 text-sm font-medium text-red-900 dark:text-red-400">SELECT SIZE OF QR CODE</label>
                    <select id="size" name="size" required class="dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-300 peer bg-gray-50 mb-3 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-400 dark:placeholder-gray-400 dark:text-white">
                        <option value="100">100x100</option>
                        <option selected value="200">200x200</option>
                        <option value="300">300x300</option>
                        <option value="400">400x400</option>
                        <option value="500">500x500</option>
                    </select>
                    <label for="style" class="block mb-2 mt-8 text-sm font-medium text-red-900 dark:text-red-400">SELECT STYLE OF QR CODE</label>
                    <select id="style" name="style" required class="dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-300 bg-gray-50 mb-3 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-400 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="square">Square</option>
                        <option value="round">Round</option>
                        <option value="dot">Dot</option>
                    </select>
                    <button type="submit" class="w-full text-white bg-red-600 hover:bg-red-700 focus:ring-2 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm mt-10 float-right px-3 py-2 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-800">Generate</button>
                </div>
            </form>
        </div>
        <div class="2xl:col-span-5 flex mt-10 flex-col">
            <img class="max-w-fit" src="{{asset('images/qrcode.png')}}" alt="">
        </div>
    </div>
</body>
</html>
