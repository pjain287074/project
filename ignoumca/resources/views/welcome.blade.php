@extends('layouts.ignouprojectlayouts')
@section('title')
   Home| B-Trust
@endsection
 
{{-- assets for home page --}}
@push('style')
 
 
 
@endpush
 
@push('scripts')
 {{-- <script src="{{ asset('scripts/slick.js') }}" defer></script> --}}
 
@endpush
 
 
 
@section('content')
  @include('products.home.index')
@endsection


