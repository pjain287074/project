@extends('layouts.ignouprojectlayouts')
@section('title')
   Overview Analysis
@endsection
 
{{-- assets for home page --}}
@push('style')
 
 
 
@endpush
 
{{-- Frequency of milk consumption --}}
{{-- Daily, 2-3 days, 1-2 weeks, Monthly, Never , data="76, 24, 0, 0,0"--}}
 
{{-- quality rating of product  --}}
{{-- 1 star , 2 star,3 star, 4 star, 5 star , data="6, 10, 17, 53,14"--}}
 
{{-- Mode of Buying --}}
{{-- Super Market, Retail Store, Online --}}
 
{{-- Factors affecting the Choice --}}
@section('content')
{{-- {{dd($data)}} --}}
{{-- {{dd($item)}} --}}
@foreach ($data as $item)
 
 @php
 $heading = $item['heading'];
 $datasets = $item['datasets']; ;
 $labels = $item['labels'];
 $chartType = $item['chartType'];
 $showLabel = $item['chartType'] !='bar' ? true : false;
 @endphp
 <div class="p-40">
 <div class="row">
   <div class="col-md-3"></div>
 
   <div class="col-md-6 p-40">
     <h1>{{$heading}}</h1>
     <canvas  class="chartjs-render-monitor js-my-chart" data-represent="" data-datasets="{{$datasets}}" data-labels="{{$labels}}" data-background-colors="
       #ee6083,
       #3ba3eb,
       #52c0c0,
       #fce5a1,
       #f9cc8b
     " data-chart-type="{{$chartType}}" ></canvas>
   </div>
 </div>
 </div> 
@endforeach
 
@endsection
 
 
 
@push('scripts')
 {{-- <script src="{{ asset('scripts/slick.js') }}" defer></script> --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" defer></script>
 <script> 
 $(document).ready(function () {
  
   let chartElemArray = document.getElementsByClassName('js-my-chart');
   [].forEach.call(chartElemArray,(chartElem)=>{
        // let chartElem = document.getElementsByClassName('js-my-chart');
   // backgorund color
   let backgroundColor = chartElem.dataset.backgroundColors.split(',');
  
   let represent = chartElem.dataset.represent;
   let chartType = chartElem.dataset.chartType;
   let labels = chartElem.dataset.labels.split(',');
   let datasets = chartElem.dataset.datasets.split(',');
 
 
 
   let contextChartElem = chartElem.getContext('2d');
 
   let massPopChart = new Chart(contextChartElem,{
     type: chartType, // line, pie , bar
     data:{
       labels: labels,
       datasets: [{
         data: datasets,
         label: labels,
         backgroundColor: backgroundColor,
         borderWidth: 1,
         borderColor: '#f7f7f7',
         hoverBorderWidth: 1,
         hoverBorderColor: '#f7f7f7',
         hoverBackgroundColor: '#8d8d8d',
       }]
     },
     options:{
       title: {
         display: true,
         text: represent,
         fontSize: 25,
         fontColor: '#c00800',
 
       },
       legend:{
         display: chartType != 'bar',
         position: 'right',
       }
     }
   });
   })
  
 })
 </script>
@endpush
 


