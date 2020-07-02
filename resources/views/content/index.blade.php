@extends('layouts.master')

@section('content')
@yield('sub-content')
@endsection

@push('script')
@stack('sub-script')
@endpush

@push('link')
@stack('sub-link')
@endpush