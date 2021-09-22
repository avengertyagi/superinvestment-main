@extends('layouts.kyc')

@section('content')
    <x-kyc.upload :user="$user"></x-kyc.upload>
@endsection