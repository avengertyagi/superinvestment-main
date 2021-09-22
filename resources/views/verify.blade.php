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

    <div class="md:mx-auto fixed inset-0 bg-white sm:mx-auto">
        <div class="min-w-min bg-gray-50"><img class="w-60 mx-auto py-3" src="/Image/superinvestlogosvg.svg" alt="SuperInvest"></div>
        
        <div class="mt-6">
            <x-otp.otp token="{{$token}}"></x-otp.otp>
        </div>

    </div>
</body>
</html>
