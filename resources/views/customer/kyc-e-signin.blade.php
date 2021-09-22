@extends('layouts.kyc')

@section('content')
<x-kyc.e-signin :id="$id" :user="$user"></x-kyc.e-signin  >
@endsection
