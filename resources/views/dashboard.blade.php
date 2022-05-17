<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="../css/stilus.css" rel="stylesheet" type="text/css" />
        <script src="../js/ajax.js"></script>
        <script src="../js/teszt.js"></script>
        <script src="../js/script.js"></script>
        <title>Laravel</title>
    </head>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div> -->
            </div>
        </div>
    </div>
    <article>
        <form action="">
            <select name="kategoria" id="kategoria">
                <option value="1">Temészetvédelem</option>
                <option value="2"> Nem temészetvédelem</option>
            </select>
        </form><br><br>

        <div class="kerdoiv">
            <h2 class="kerdes">?</h2>
            <div class="valaszok">
                <button class="valasz" class="v1" id="v1">a</button>
                <button class="valasz" class="v2">b</button>
                <button class="valasz" class="v3">c</button>
                <button class="valasz" class="v4">d</button>
            </div>
        </div>

    </article>

</x-app-layout>