@extends('layouts.ignouprojectlayouts')
@section('title')
   Home| Milk Survey
@endsection
 
{{-- assets for home page --}}
@push('style')
 
 
 
@endpush
 
@push('scripts')
 {{-- <script src="{{ asset('scripts/slick.js') }}" defer></script> --}}
 
@endpush
 
 
 
@section('content')
 
 @include('products.basicForm.index',['nextFormId'=>'js-milk-info-form'])
 @include('products.milk.index',['id'=>'js-milk-info-form'])
 
@endsection

