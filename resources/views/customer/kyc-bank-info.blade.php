@extends('layouts.kyc')

@section('content')
    <x-kyc.bankinfo :user="$user"></x-kyc.bankinfo>
@endsection
