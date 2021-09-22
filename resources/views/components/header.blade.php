<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Superinvest</title>
  <meta name="author" content="name">
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

  <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">  
  <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> 
</head>
<body>
<div class="w-full h-screen">
  <header class="bg-teal-400 shadow-lg bg-gray-100">
    <nav class="flex justify-between w-full bg-white text-white p-4">
      <a href="/"><span class="font-semibold text-xl tracking-tight"><img class="pl-12" src="{{ asset('/Image/superinvest.png') }}" width="300" height="300"></span></a>
        <div class="justify-between md:items-center mx-auto  md:w-auto flex">
          <div class="md:flex hidden">
            <a class="px-16 block md:text-gray-900 font-bold" href="Invest">How to invest</a>
            <a class="px-16 block md:text-gray-900 font-bold" href="about_us">About Us</a>
            <a class="px-16 block md:text-gray-900 font-bold" href="FAQ">FAQ</a>
          </div>
          <div class="flex text-sm" v-else>
          	<!--<a class="p-2 ml-2 bg-white text-teal-500 font-semibold leading-none border border-gray-100 rounded hover:border-transparent hover:bg-gray-100" href="/auth/signin">Login</a>-->
            <a class="p-2 ml-8 m_5 text-gray-100 font-semibold leading-none border border-teal-600 rounded hover:border-transparent hover:bg-teal-600" href="/auth/signup">Login/Register</a>
          </div>
        </div>
    </nav>
  </header>
  
