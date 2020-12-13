<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link
            href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
            rel="stylesheet"
        />

        <link rel="stylesheet" href="/css/app.css">

    </head>
   <body class="py-4">
       <div class="max-w-lg mx-auto bg-gray-300 p-4">
           @foreach (range(1,10) as $i)
               <div class="bg-white p-4 rounded mb-4">
                   <h1 class="font-bold mb-2 text-lg">A new post</h1>
                   <p class="text-sm clamp two-lines lg:three-lines">
                       @php
                           echo str_repeat('Lorem ipsum dolor, sit amet consectetur adipisicing elit. ', $i)
                       @endphp
                   </p>

               </div>
           @endforeach
       </div>
   </body>
</html>
