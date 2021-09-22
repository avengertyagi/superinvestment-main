@component('mail::message')
    # Welcome

    The body of your message.

    Your OTP is {{ $otp }}

    Thanks,
    {{ config('app.name') }}
@endcomponent

