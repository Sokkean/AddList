<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Button</title>
</head>
<body>
    {{-- <h1 class="text-3xl text-red-300">Hello</h1>
    <div class="w-full text-center">
        <x-element.button class="bg-red-500 py-2 px-10 text-white rounded-md" />
    </div> --}}
    {{-- <div class="w-full h-full  text-gray-900">
        <div class="w-full flex items-center justify-center h-[100vh]">
            <x-element.button-color  name="Click Me" class="bg-blue-500 rounded-md"/>
        </div>
    </div> --}}

    {{-- primary btn --}}
    <div class="w-full h-[100vh] flex items-center justify-center">
        <x-element.primary-btn href="#" class="bg-yellow-400 text-white hover:bg-blue-700 py-2 px-10">
            Button
        </x-primary-btn>
    </div>

    {{-- props buttonClass --}}

   {{-- <div class="flex items-center justify-center h-[100vh]">
    <x-element.primary-btn  href="#" buttonClass="bg-red-500 hover:bg-indigo-600 text-white rounded-md">
        Button
    </x-element.primary-btn>

   </div> --}}


</body>
</html>
