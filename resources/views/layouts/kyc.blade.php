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

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
</head>
<body>
<div class="bg-white fixed inset-0 md:mx-auto overflow-x-hidden overflow-y-auto sm:mx-auto">
    <div class="md:container md:mx-auto">
        <div class="md:-mx-8">
            <a href="{{url('/')}}" class="min-w-min bg-gray-50"><img class="w-60 mx-auto py-3" src="{{asset('/Image/superinvestlogosvg.svg')}}" alt="SuperInvest"></a>
            <div class="relative sm:w-3/4 md:w-2/5 sm:mx-auto mt-14 opacity-100">
                <ul id="progressbar" class="flex text-center">
                    <li class="flex-1 {{$user->kycData->adhar_back_path ? 'active' : ''}}" id="document"><strong>Document</strong></li>
                    <li id="esign" class="flex-1 {{$user->kycData->digio_doc_id ? 'active' : ''}}"><strong>E-sign</strong></li>
                    <li id="bankaccount" class="flex-1 {{$user->kycData->bank_doc_path ? 'active' : ''}}  {{$user->kycData->bank_account_number ? 'active' : ''}}"><strong>Bank Account Details</strong></li>
                </ul>
                <ul id="progressbar2" class="absolute top-0 flex left-0 right-0 text-center">
                    <li class="{{$user->kycData->adhar_back_path ? 'active' : ''}} block flex-1 lg:ml-16 md:ml-14 ml-20 w-full xl:ml-24" id="esign"><p>-</p></li>
                    <li class="{{$user->kycData->digio_doc_id ? 'active' : ''}} block flex-1 lg:mr-16 md:mr-14 mr-20 w-full xl:mr-24" id="bankaccount"><p>-</p></li>
                </ul>
            </div>
            <div class="md:w-2/4 mx-auto text-center text-sm mt-8">
                <p class="xl:text-sm text-xs">Hello Superinvest, as per regulatory requirements we need to verify you PAN and Aadhaar Cards</p>
            </div>
            
            <div class="inset-0 w-full h-full z-20 duration-300 flex items-center mb-8">
                <div class="lg:w-1/3 m-1 md:w-1/2 pt-2 mx-2 opacity-100 relative sm:mx-auto sm:w-3/4 w-full">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
