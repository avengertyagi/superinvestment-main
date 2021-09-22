@extends('layouts.kyc')

@section('content')
    <x-kyc.bankdoc :user="$user"></x-kyc.bankdoc>
@endsection
